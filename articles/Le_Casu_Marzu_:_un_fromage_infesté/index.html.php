<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>get</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    </head>
    <body><?php\n $titre = "blog"\n ?><div class="w3-top">
  <script type="text/javascript">
  function myFunction() {
    if (document.getElementById("myTopnav").classList.contains('topnav')) {
      document.getElementById("myTopnav").classList.add('responsive');
    } else {
      document.getElementById("myTopnav").classList.remove('responsive');
      document.getElementById("myTopnav").classList.add('topnav');
    }
  }
  </script>
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <!--a href=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/index.html.php"?> class="w3-bar-item">
			<img src=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/img/logoMando1.jpg" ?> style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a-->
			<div class="w3-right w3-hide-small navbar topnav" id="myTopnav">
					<?php
					$tab = array("agence"=>"","blog"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/agence.html.php";?> style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/blog.html.php";?> style="margin : 1vh" >Blog</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["guide"]);?>" href="http://mandomangi.com" style="margin : 1vh" >Guide</a>
			</div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
  </div>
</div>

          <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
            <div class="w3-content" style="max-width:2000px;margin-top:46px">
          		<div class="w3-display-container w3-center">
          	    <img src="<?php
                if(is_file(glob('1.*')[0])){
                      echo glob('1.*')[0];
                }else{
                      echo "https://www.gannett-cdn.com/-mm-/d45a1bc902cb3f4367b332e27f859c7252d4b7fa/c=0-109-2119-1306/local/-/media/2019/04/12/USATODAY/USATODAY/636906715367623091-GettyImages-1054857274.jpg?width=3200&height=1680&fit=crop";
                    }
                ?>"style="width: 100%;max-height:80vh;object-fit: cover;">
          	    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          	      <h3>Le Casu Marzu : un fromage infesté</h3>
          	      <p><b>Le Cazu Marzu est un fromage infesté par des vers typique de la Sardaigne </b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Le Casu Marzu : un fromage infesté">
          <p class="w3-justify"><?php $text = (str_replace(array("\n"),array("<br>"),'Le Casu Marzu est un fromage typique de la Sardaigne qui est consommé dans une manière insolite.

Il s’agit d’un produit alimentaire particulièrement mystérieux, qui suscite curiosité et crainte. En effet où on l’aime où on le déteste ! Pour réussir à le goûter il faut avoir l’estomac bien accroché et ce n’est pas pour tout le monde.

Le « casu marzu » ou « casu frazigu » a été classé par le livre Guinness des Records comme le fromage le plus dangereux au monde. Cela pourrait être suffisant pour justifier la curiosité causée par ce fromage typique de la Sardaigne, patrie d’une importante tradition fromagère.

Ce fromage doit sa particularité au fait qu’il est infesté par des vers, ou mieux des larves de la mouche Piophila casei, qui est « invitée » à se nourrir et se reproduire à l’intérieur des meules de Pecorino.

Les origines de cette procédure de production sont très anciennes. Les meules de fromage de lait ovine sont mises à affiner dans des locaux fermés, chauds, sombres et non aérés, pour ne pas permettre aux mouches communes d’y entrer.

Pour aider la mouche du fromage à entrer dans les moules, les producteurs font des incisions sur la croûte du fromage et ils ne salent pas trop le lait pour permettre la vie des larves.

Quand les larves ont colonisé la meule, les producteurs permettent l’aération des meules pour que les larves puissent se nourrir avec le fromage. En faisant cela, elles transforment les protéines et les lipides en structures plus simples. Ce type d’altérations déterminent le gout piquant et particulier de ce fromage.

La préparation du Casu Marzu (vidéo en italien)

Il est important de savoir que ce produit, malgré il a été inséré parmi les produits agroalimentaires traditionnels italiens (PAT), ne peut pas être commercialisé parce qu’il rentre dans la loi qui interdit la vente de nourriture envahie par des parasites. Il est impossible donc de le trouver dans les lieux publics et dans les restaurants.

Qui veut essayer cette spécialité devra la goûter chez les pasteurs sardes ou chez des petites fromageries de la région.

Tartiné sur le pain Carasau, avec un calice de vin Cannonau, le « Casu Marzu » peut vous faire vivre une expérience intense, comme celles que toute la merveilleuse Sardaigne sait offrir à ses touristes !'));
            echo stripslashes($text);
          ?>
          </p>
        </div>

        </body>
      </html>