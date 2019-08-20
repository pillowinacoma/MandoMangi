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
          	      <h3>La cuisine régionale : La Campanie</h3>
          	      <p><b>La richesse de la cuisine campane: pas seulement de pizza ! </b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="La cuisine régionale : La Campanie">
          <p class="w3-justify"><?php $text = (str_replace(array("\n"),array("<br>"),'La Campanie est une région qui, d’un point de vue historique, a connu plusieurs influences, qui se sont reflétées dans certains aspects de culture, dont la gastronomie.

La cuisine de la Campanie a à certains égards une substance et un goût qui reflète les caractères français et espagnols : des plats riches, abondants et flashy, mais en même temps ses préparations simples sont basées sur des ingrédients locaux, authentiques, où le poisson et la viande sont réservés pour les occasions, comme il était d’usage dans les familles les plus humbles.

La pizza est le plat le plus célèbre de la gastronomie de cette région, et elle est devenue un symbole de toute l’Italie dans le monde : de la première focaccia romaine, jusqu’à la pizza plus semblable à celle de nos jours, des centaines d’années ont passé, mais le temps a permis à la créativité des gens de la Campanie d’évoluer et d’améliorer, dans toutes ses variations que nous pouvons goûter aujourd’hui.

Mais il existe aussi d’autres plats forts de Campanie, basés sur des ingrédients simples. Parmi les premiers à citer, certainement les aubergines et les poivrons farcis, le parmigiana, le poulpe de Santa Lucia cuit avec le piment fort et la tomate, une constante parmi les recettes les plus populaires dans la région. Les palourdes napolitaines sont extrêmement parfumées et charnues, et accompagnent souvent les vermicelles et les macaronis dans les premiers plats de poisson.

Les pâtes de Naples sont parfaites dans la fabrication, la transformation et la cuisson qui doivent toujours être al dente, afin de profiter pleinement de la sauce. Les sauces principales sont la pummarola (tomate), l‘ail et l’uoglio (ail et huile) avec une mention spéciale pour le ragù de viande. Les produits laitiers sont souvent les protagonistes des tables en Campanie, du provolone au scamorza, même si la principale variété reste la mozzarella, produite surtout dans la région d’Aversa, Eboli et Capua.

La Campanie est renommée pour la richesse de son street food : le Cuoppo est une feuille en forme de cône qui se remplit de tout, à condition bien sûr qu’il soit frit (poisson, mozzarella, arancini et croquettes de pommes de terre) ; le panuozzo est le point de connexion entre le sandwich et la pizza, c’est du pain fait à partir de la pâte de la pizza farcie avec de la mozzarella, des tomates, des légumes et même en tranches ; la pizza a portafoglio est une pizza qui est pliée jusqu’à ce qu’elle devienne facile à manger dans la rue ou encore la pizza fritta.

Les desserts méritent un paragraphe à part : les plus classiques vont de la glace au fameux baba à la liqueur, de la sfogliatella à la somptueuse pastiera, avec les fruits confits, la ricotta et la fleur d’oranger.'));
            echo stripslashes($text);
          ?>
          </p>
        </div>

        </body>
      </html>