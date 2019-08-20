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
    <!--a href=<?php  echo "/index.html.php"?> class="w3-bar-item">
			<img src=<?php  echo "/img/logoMando1.jpg" ?> style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a-->
			<div class="w3-right w3-hide-small navbar topnav" id="myTopnav">
					<?php
					$tab = array("agence"=>"","blog"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href=<?php echo "/agence.html.php";?> style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href=<?php echo "/blog.html.php";?> style="margin : 1vh" >Blog</a>
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
          	      <h3>La cuisine régionale : les Pouilles</h3>
          	      <p><b>Les spécialités des Pouilles: les orecchiette, la puccia, la tiella, le pasticciotto... Un univers à découvrir ! </b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="La cuisine régionale : les Pouilles">
          <p class="w3-justify"><?php $text = (str_replace(array("\n"),array("<br>"),'Les Pouilles, le “Talon de la Botte”, sont renommées pour les traditions, la musique populaire, les sites naturels et historiques, les plages merveilleuses du Salento… mais bien sûr pour la cuisine ! Les taralli, les orecchiette, la puccia, la burrata, le pasticciotto, les vins… Un univers à découvrir !

Bien qu’il existe des plats communs, les recettes varient d’une province à l’autre, et parfois d’une ville à l’autre, de sorte que, par exemple, les recettes typiques des provinces de Tarente, Brindisi et Bari, sur la mer, ne sont pas égales à celles de la province de Foggia, plus collinaire, et de Lecce, plus terrestre.

Il existe de nombreuses recettes dans cette cuisine, qui offre différents plats en fonction des différentes saisons. Pendant les saisons les plus douces, au printemps et en été, on donne la préférence aux légumes et au poisson, tandis que dans les autres saisons on consomme plutôt les légumes, les pâtes faites maison assaisonnées avec différentes sauces, des légumes ou du poisson.

Les plats les plus typiques sont les « Orecchiette alle cime di rapa » (pates aux feuilles de navet), la Chicorée à la purée de fèves, et ceux qui relient le territoire à la Méditerranée, comme les « Cavatelli alle cozze » (Pates avec les moules) ou le « Riso, patate e cozze » (riz, pommes de terre et moules).

Les pucce sont des formes de pain d’un diamètre d’environ 20 à 30 cm liées à la tradition culinaire des Pouilles du centre et du sud. Elles sont très répandues dans le Salento (d’où le nom Puccia Salentina) et elles sont remplies d’ingrédients pauvres, saisonniers et typiques de la tradition culinaire locale : aubergines, tomates, poivrons, courgettes, roquette, chicorée sauvage et fromage.

En demandant à un habitant des Pouilles quels sont les plats qui caractérisent sa terre, vous pouvez entendre la réponse : « moules arrancanate, ciceri et tria,’ncapriata, cazzmar, gniummerieddi ou ghiemeìidde, recchietelle, strascenate, chiancarelle, lagane, troccoli, cavattieddi avec pois chiches et mignuicchi ». Des termes presque intraduisibles mais certainement suggestifs et symboles d’une cuisine simple mais savoureuse.

La magnificence de la cuisine des Pouilles se distingue dans la « tiella » (dont le nom vient du plat à four qu’on utilise pour préparer cette recette) et en particulier celle « riz, pommes de terre et moules » symbole de la contamination espagnole.

Le goût sucré des pâtisseries des Pouilles se caractérise par le miel, le moût cuit et les figues cuites. Mais il ne faut pas oublier le Pasticciotto Leccese, un dessert typique du Salento dans les Pouilles, composé de pâtisseries courtes traditionnellement fourrées de crème et cuites au four.

Si vous voulez apprendre à préparer les recettes typiques des Pouilles, Mandomangi organise un atelier de cuisine avec une grand-mère des Pouilles où vous pourrez apprendre, cuisinier et manger ces spécialités !'));
            echo stripslashes($text);
          ?>
          </p>
        </div>

        </body>
      </html>