var DataOut = {};
var errors = "";
var express = require('express'),
  path = require('path'),
  bodyparser = require('body-parser'),
  cons = require('consolidate'),
  dust = require('dustjs-helpers'),
  app = express();
const {Pool} = require('pg');
const pool = new Pool({  user: "postgres",  password: 123456789,  host: "localhost",  post: 5432,  database: "mandomangi"});

const testFolder = './public/img/';
const fs = require('fs');

const multer = require("multer");

const handleError = (err, res) => {
  res
  .status(500)
  .contentType("text/plain")
  .end("Oops! Something went wrong!");
};

const storage = multer.diskStorage({
  destination: './public/img/',
  filename: function(req, file, cb){
    cb(null,req.body.photoRestoId + "-" + Date.now() + path.extname(file.originalname));
  }
});

// Init Upload
const upload = multer({
  storage: storage,
  limits:{fileSize : 1000000},
  fileFilter: function(req,file,cb){
    checkFileType(file,cb);
  }
}).single('resto');

//Check file type

function checkFileType(file,cb) {
  //Allowed extentions
  const filetypes = /jpeg|jpg|png|gif/;
  //check extention
  const extname = filetypes.test(path.extname(file.originalname).toLowerCase());
  //check mime
  const mimetype = filetypes.test(file.mimetype);

  if(mimetype && extname){
    return cb(null,true);
  }
}

//Assign Dust Engine to .dust files
app.engine('dust', cons.dust);

//Set default extension .dust
app.set('view engine', 'dust');
app.set('views', __dirname + '/views');

//Set public folder
app.use(express.static(path.join(__dirname, 'public')));

//Body parser middleware
app.use(bodyparser.json());
app.use(bodyparser.urlencoded({
  extended: false
}));

app.get('/', function(req, res) {
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });

  fs.readdir(testFolder, (err, files) => {
    var fileArray=[];
    files.forEach(file => {
      fileArray.push({imgId:file.split('-')[0],imgName : file});
    });
    DataOut.Images = fileArray;
  });

  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query('SELECT * FROM resteaurant ORDER BY id', (err, result) => {
      if (err) {
        console.log(err.stack);
      }
        DataOut.resto = result.rows;
    });
    client.query('SELECT * FROM plat ORDER BY title', (err, result) => {
      if (err) {
        console.log(err.stack);
      }
      DataOut.plats = result.rows;
      DataOut.errors = errors;
      res.render('index',{datas : DataOut});
      done();
    });
  });
});

app.post("/add", function(req, res) {
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });
  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query('INSERT INTO resteaurant VALUES(DEFAULT,$1,$2,$3,$4,$5,$6,$7)',
      [req.body.title, req.body.contnt, req.body.region, req.body.categorie, req.body.adresse, req.body.phone, req.body.website]);
    done();
    res.redirect('/');
  });
});

app.post("/addPlat", function(req, res) {
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });
  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query('INSERT INTO plat(Title,Content) VALUES($1,$2)',
      [req.body.title, req.body.content], (err, result) => {
        if (err) {
          console.log(err.stack);
        }
      });
    client.query('INSERT INTO platinresto(platid,restoid,prix) VALUES((SELECT currval(pg_get_serial_sequence(\'plat\',\'id\'))) ,$1,$2)',
      [parseInt(req.body.idResteau),parseFloat(req.body.prix)], (err, res) => {
      if (err) {
        console.log(err.stack);
      }
    });
    console.log("adding plat to plats resto menu");
    done();
    res.redirect('/');
  });
});

app.post("/selectPlat", function(req, res) {
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });
  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query("INSERT INTO platinresto(platId,restoId,prix) VALUES($1,$2,$3)",
      [req.body.idPlat, req.body.idResteau,req.body.prix]);
      console.log('Adding plat to resteaurant menu');
    done();
    res.redirect('/');
  });
});

app.post("/edit", function(req, res) {
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });
  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query("UPDATE resteaurant SEt Title=$1,Content=$2,Region=$3,Categorie=$4,Adresse=$5,Phone=$6,Website=$7 WHERE id = $8",
      [req.body.title, req.body.content, req.body.region, req.body.categorie, req.body.adresse, req.body.phone, req.body.website, req.body.id]);
      console.log('Adding resto to resteaurants');
    done();
    res.redirect('/');
  });
});

app.post('/imgUpload',(req,res)=>{
  upload(req, res, (err) => {
    if(err){
      error = "Error";
      res.redirect('/');
    }else{
      if(req.file == undefined){
        error = "Please insert file";
        res.redirect('/');
      }
      console.log(req.file);
      res.redirect('/');
    }
  })
});

app.delete('/delete/:id',function(req,res){
  pool.on('error', (err, client) => {
    console.error('Unexpected error on idle client', err);
    process.exit(-1);
  });
  pool.connect((err, client, done) => {
    if (err) throw err;
    client.query("DELETE FROM resteaurant WHERE id = $1",[req.params.id]);
      console.log('Deleting resto');
    done();
    res.send(200);
  });
});

//Server
app.listen(3000, function() {
  console.log("Server is running on port 3000");
});
