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
          	      <h3>L’Italiano Vero : la cuisine italienne à Lyon</h3>
          	      <p><b>Découvrez le restaurant L'Italiano Vero, une adresse italienne de Lyon où vous pouvez trouver la vraie cuisine italienne de qualité ! </b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="L’Italiano Vero : la cuisine italienne à Lyon">
          <p class="w3-justify"><?php $text = (str_replace(array("\n"),array("<br>"),'Antonio et Maria

Antonio, 32 ans, est né à Naples et a commencé à travailler dans la restauration dès l’âge de 15 ans. Il ouvre tout d’abord une pizzeria dans sa région, la Campanie, et ensuite il se lance dans un nouveau défi en ouvrant un restaurant gastronomique traditionnel. Après quelques années, il arrive à Aix -en-Provence où il continue à travailler dans la restauration.

Maria, son épouse, est sicilienne et elle s’est formée à Taormina, en Sicile.  Ensemble, ils ouvrent en septembre 2014 leur restaurant italien L’Italiano Vero, qui a obtenu en 2015 le label « Ospitalità Italiana nel Mondo ». En effet, le Ministère du Tourisme Italien et la Chambre de Commerce Italienne de Lyon lui ont décerné ce prix en raison de la qualité des ingrédients, l’expérience professionnelle du gérant, le service attentionné et l’ambiance conviviale respectueuse des critères de l’hospitalité italienne.

L’Italiano Vero

Le restaurant L’Italiano Vero est situé dans le troisième arrondissement de Lyon, à Montchat.

« Je fais ici à Lyon ce que je préparais à mes clients napolitains. Nous proposons la tradition culinaire italienne » explique Antonio. En effet, 90% des ingrédients utilisés dans la cuisine de Antonio et Maria proviennent directement de l’Italie : la Bufala et les autres fromages de la Campanie sont importés de la fromagerie La Fattoria, les produits frais de Selezione Italiana Costa et les vins du producteur Tenuta Sorrentino Vini.

Vous pouvez retrouver ces produits au Voyage Gastronomique en Méditerranée, le 10 juillet 2019.

Ici, tout est fait maison : les pizzas sont excellentes grâce aux ingrédients frais et l’expertise du pizzaïolo napolitain. La carte est diversifiée et innovatrice, avec une empreinte méditerranéenne qui cherche à mettre en valeur au mieux les produits artisanaux toujours en évolution selon les saisons pour garantir la fraîcheur de l’assiette.

 Dans la carte vous pouvez trouver les entrées italiennes dont des planches de charcuterie et fromages italiens, les primi piatti, dont les pâtes Carbonara, aux fruits de mer et au pesto fait maison, les secondi piatti à base de viande ou de poisson et bien sur les traditionnelles pizzas au feu de bois ! La carte de vins est 100% italienne et présente le meilleur des terroirs de la botte.

L’ambiance est familiale: vous entendrez parler italien et vous serez accueillis selon les règles de l’hospitalité italienne, même dans la petite terrasse pendant les beaux jours !

Si vous avez envie de tester la cuisine de L’Italiano Vero, profitez du  Voyage gastronomique en Méditerranée, un dîner découverte qui aura lieu le 10 juillet à 19h.
Vous pouvez vous faire plaisir avec une dégustation des meilleurs produits italiens et des meilleures recettes du restaurant à un tarif avantageux.*

* Avec l’achat de 3 dîners en prévente (avant le 7 juillet), le quatrième est offert.'));
            echo stripslashes($text);
          ?>
          </p>
        </div>

        </body>
      </html>