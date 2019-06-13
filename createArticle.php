<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php $_POST['titre'];  ?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/stylesheet.css">
  </head>
  <body>
    <?php $title = 'blog' ;include 'navbar.php';?>

    <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
      <div class="w3-content" style="max-width:2000px;margin-top:46px">
    		<div class="w3-display-container w3-center">
    	    <img src=<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && $_FILES['img']['error'] == 'UPLOAD_ERR_OK'){
                if (!file_exists('articles/'.str_replace(" ","_",$_POST['titre']).'/')) {
                  mkdir('articles/'.str_replace(" ","_",$_POST['titre']).'/', 0777, true);
                }
                $uploaddir = 'articles/'.str_replace(" ","_",$_POST['titre']).'/';
                $extension = (explode(".",basename($_FILES['img']['name']))[sizeof(explode(".",basename($_FILES['img']['name'])))-1]);
                $uploadfile = $uploaddir.'1.'.$extension;
                list($width, $height, $type, $attr) = getimagesize($_FILES['img']['tmp_name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    echo '"'.$uploadfile.'"';
                }else{
                    echo '"'."https://www.gannett-cdn.com/-mm-/d45a1bc902cb3f4367b332e27f859c7252d4b7fa/c=0-109-2119-1306/local/-/media/2019/04/12/USATODAY/USATODAY/636906715367623091-GettyImages-1054857274.jpg?width=3200&height=1680&fit=crop".'"';
                }
            }else{
                echo '"'."https://www.gannett-cdn.com/-mm-/d45a1bc902cb3f4367b332e27f859c7252d4b7fa/c=0-109-2119-1306/local/-/media/2019/04/12/USATODAY/USATODAY/636906715367623091-GettyImages-1054857274.jpg?width=3200&height=1680&fit=crop".'"';
            }
          ?>style="width: 100%;max-height:80vh;object-fit: cover;">
    	    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    	      <h3><?php echo $_POST['titre']; ?></h3>
    	      <p><b><?php echo($_POST['pTitre']); ?></b></p>
    	    </div>
    	  </div>
      </div>
    </header>

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id=<?php echo '"'.$_POST['titre'].'"'; ?>>
    <p class="w3-justify"><?php echo(str_replace("\n","<br>",$_POST['article'])); ?></p>

  </body>
</html>
    <?php
    $file = 'index.html.php';
    $handle1 = fopen('navbar.php','r');
    if (!file_exists('articles/'.str_replace(" ","_",$_POST['titre']).'/')) {
      mkdir('articles/'.str_replace(" ","_",$_POST['titre']).'/', 0777, true);
    }
    $handle = fopen('articles/'.str_replace(" ","_",$_POST['titre']).'/'.$file, 'w') or die('Cannot open file:  '.'articles/'.str_replace(" ","_",$_POST['titre']).'/'.$file);
    $head = "<!DOCTYPE html>
    <html lang=\"en\" dir=\"ltr\">
    <head>
    <meta charset=\"utf-8\">
    <title>get</title>
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"../../css/stylesheet.css\">
    </head>
    <body>".'<?php\n $titre = "blog"\n ?>'.fread($handle1,filesize('navbar.php'));
          $body="
          <header class=\"w3-display-container w3-content w3-wide\" style=\"max-width:1600px;min-width:500px\" id=\"home\">
            <div class=\"w3-content\" style=\"max-width:2000px;margin-top:46px\">
          		<div class=\"w3-display-container w3-center\">
          	    <img src=\"<?php
                if(is_file(glob('1.*')[0])){
                      echo glob('1.*')[0];
                }else{
                      echo \"https://www.gannett-cdn.com/-mm-/d45a1bc902cb3f4367b332e27f859c7252d4b7fa/c=0-109-2119-1306/local/-/media/2019/04/12/USATODAY/USATODAY/636906715367623091-GettyImages-1054857274.jpg?width=3200&height=1680&fit=crop\";
                    }
                ?>\"style=\"width: 100%;max-height:80vh;object-fit: cover;\">
          	    <div class=\"w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small\">
          	      <h3>". $_POST['titre'] ."</h3>
          	      <p><b>". ($_POST['pTitre'])."</b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class=\"w3-container w3-content w3-center w3-padding-64\" style=\"max-width:800px\" id=\"".$_POST['titre']."\">
          <p class=\"w3-justify\"><?php echo(str_replace(array(\"\\n\",'".'"'."'),array(\"<br>\",'".'\"'."'),\"".$_POST['article']."\"))?>
          </p>
        </div>

        </body>
      </html>";
      $registre = 'articles/'.str_replace(" ","_",$_POST['titre']).'/registre.txt';
      $fh1 = fopen($registre, 'w') or die('Cannot open file:  '.$my_file);
      fwrite($fh1,$_POST['titre']."\n".$_POST['pTitre']);
      fclose($fh1);
    fwrite($handle, $head.$body);
    fclose($handle);

?>
