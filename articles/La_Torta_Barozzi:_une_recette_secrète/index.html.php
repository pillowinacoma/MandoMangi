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
          	      <h3>La Torta Barozzi: une recette secrète</h3>
          	      <p><b>Spécialité historique de Vignola et répandue dans toute la région de Modène, la Torta Barozzi est un gâteau dont la recette est secrète. </b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="La Torta Barozzi: une recette secrète">
          <p class="w3-justify"><?php $text = (str_replace(array("\n"),array("<br>"),'Si vous avez programmé de visiter l’Emilie-Romagne, la région gastronomique italienne par excellence, vous allez découvrir la célèbre et mystérieuse Torta Barozzi.

Spécialité historique de Vignola et répandue dans toute la région de Modène, il s’agit d’un gâteau dont les ingrédients sont œufs, chocolat noir, cacao, café décaféiné, sucre, beurre, margarine, vanille, rhum, amandes et cacahuètes. Pas de farine : un gâteau naturellement sans gluten.
Esthétiquement, il peut rappeler le brownie et il est servi en portions carrées.

L’originalité de la recette de ce gâteau consiste dans la précise proportion de cacahuètes, d’amandes, de cacao et de café, bien que les quantités exactes et la méthode précise de préparation restent un secret à ce jour. Les pâtissiers de la région vendent des préparations très similaires, mais jamais exactement identiques, généralement vendues sous le nom de « Torta tipo Barozzi » (gâteau type Barozzi).

Initialement appelée « Torta Nera » (gâteau noir), la Torta Barozzi a été créée en 1886 par Eugenio Gollini, qui avait ouvert une pâtisserie au cœur de la ville de Modène.

En 1907, année où Vignola célébrait le quatrième centenaire de la naissance de son illustre citoyen Jacopo Barozzi, l’un des plus grands architectes de l’Italie centrale dans la seconde moitié du XVIe siècle, Eugenio Gollini a décidé de lui dédier le gâteau.

Il fut ainsi baptisé « Pasta Barozzi » puis définitivement « Torta Barozzi ». En 1948, le nom de la « Torta Barozzi » a été protégé par Eugenio Gollini, le neveu de l’inventeur, qui a déposé le nom et la marque. L’histoire raconte que ce nouveau gâteau a immédiatement reçu un grand succès, devenant rapidement un symbole de Vignola.

Torta Barozzi : où le manger ?
Vu que le nom de ce gâteau est encore aujourd’hui une marque déposée, l’authentique Torta Barozzi ne peut être consommée qu’au Caffè Pasticceria Gollini de Vignola.

Curiosité

La Torta Barozzi se conserve à l’extérieur du réfrigérateur pour une durée qui ne peut pas dépasser 40 jours, elle est coupée à l’envers, sans enlever le papier d’aluminium dans lequel elle est emballée et on dit qu’elle a autant de variantes que le nombre des familles en Emilie.'));
            echo stripslashes($text);
          ?>
          </p>
        </div>

        </body>
      </html>