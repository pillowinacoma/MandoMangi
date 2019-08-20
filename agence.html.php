<html>
<head>
	<title>Agence Mandomangi – Evénements et cuisine italienne </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'libs.php'; ?>
</head>
<body>
	<script type="text/javascript">
		 $(document).ready(function(){
			 	$('.slider-for').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  arrows: false,
				  fade: true,
				  asNavFor: '.slider-nav'
				});
				$('.slider-nav').slick({
				  slidesToShow: 7,
				  slidesToScroll: 1,
				  asNavFor: '.slider-for',
				  dots: false,
				  centerMode: true,
				  focusOnSelect: true,
					responsive: [{
			 			breakpoint: 1024,
			 			settings: {
			 				slidesToShow: 5,
			 				slidesToScroll: 5,
			 			}
			 		}, {
			 			breakpoint: 640,
			 			settings: {
			 				slidesToShow: 4,
			 				slidesToScroll: 4,
						}
			 		}, {
			 			breakpoint: 420,
			 			settings: {
			 				slidesToShow: 3,
			 				slidesToScroll: 3,
					}
			 		}]
				});
				 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
				 	$('.slider-nav').slick('slickGoTo', currentSlide);
				 	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
				 	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
				 	$(currrentNavSlideElem).addClass('is-active');
				 });

				 $('.slider-nav').on('click', '.slick-slide', function(event) {
				 	event.preventDefault();
				 	var goToSingleSlide = $(this).data('slick-index');

				 	$('.slider-single').slick('slickGoTo', goToSingleSlide);
				 });
		 });
	 </script>
	<!-- Navbar (sit on top) -->
	<?php	$title = "agence"; 	include 'navbar.php';?>
	<script type="text/javascript">
	function showElem(classToSelect){
		Array.from(document.getElementsByClassName("pgElem")).map(function(elem){
			if (window.location.href.includes('agence.html.php')) {
				if(elem.id === classToSelect){
					elem.classList.add('dispElem');
					elem.classList.remove('hideElem');
				}else{
					elem.classList.remove('dispElem');
					elem.classList.add('hideElem');
				}
			}
		});
	}
	$(document).ready(function(){
		showElem(window.location.hash.substr(1));
	});
	</script>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<!--___________________________EQUIPE_________________________________>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<div class="w3-content" style="max-width:1100px">
		<div class=" w3-content w3-center pgElem hideElem" style="padding-top: 10em;width:100%;" id="equipe">
				<h2 class="w3-wide">L'Équipe Mandomangi</h2>
				<div class="w3-row w3-padding-32">

					<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/img/equipe/gianluca.jpg" class=" w3-margin-bottom" style="width:100%;height: 40vh;object-fit: cover">
				<div class="card-body text-center">
          <h5 class="card-title mb-0">Gianluca</h5>
          <div class="card-text text-black-50">Fondateur de Mandomangi</div>
        </div>
				<div class="card-body text-center">
          <p>Après plusieurs années comme Responsable Commerciale Export, il décide de se lancer dans ce beau projet de promotion de la gastronomie italienne en France!
					Food Lover, créatif, et extrêmement passionné il vient des Cinq terres, lieu magique en face de la mer Méditerranée!</p>
					<p>Plat préféré : Gelato!</p>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/img/equipe/chiara.jpeg" class=" w3-margin-bottom" style="width:100%;height: 40vh;object-fit: cover">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Chiara</h5>
          <div class="card-text text-black-50">Responsable de Communication</div>
        </div>
				<div class="card-body text-center">
          <p>Diplômée en Communication internationale et Marketing, spécialisée en digital et réseaux sociaux, elle gère la com de Mandomangi.
					Spécialisée en apéro-social, tous ses repas sont pris en photo et partagés dans ses
					Instagram Stories !</p>
					<p>Plat préféré: Pâtes Carbonara! </p>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/img/equipe/gabriele.jpg" class=" w3-margin-bottom" style="width:100%;height: 40vh;object-fit: cover">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Gabriele</h5>
          <div class="card-text text-black-50">Expert culinaire</div>
        </div>
				<div class="card-body text-center">
          <p>Jeun chef italien de 24 ans, après plusieurs années d'expérience dans des
					restaurants renommées en Italie, il s'installe à Lyon et travaille dans le restaurant étoilé Têtedoie.
					Il nous amène ses compétences culinaires (animation de show cooking, Masterclass, ateliers) ainsi que sur le digitale (rédaction d'articles).</p>
					<p>Plat préféré : Gnocchi alla Romana !</p>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/img/equipe/ninon.jpg" class=" w3-margin-bottom" style="width:100%;height: 40vh;object-fit: cover">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Ninon</h5>
          <div class="card-text text-black-50">Videomaker</div>
        </div>
				<div class="card-body text-center">
          <p>Vidéaste au sein de Mandomangi et diplomée en master audiovisuel, les images sont pour elle aussi savoureuses qu’un arancino.
					Elle suit les chefs au travail, les producteurs italiens et commerçants et vous attrape en sons et en images en flagrant délit de gourmandise italienne !</p>
					<p>Plât préféré : aragostines à la gianduja !</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
					<table class="w3-center">
						<tr>
							<td><p></p></td>
							<td><p></p></td>
							<td><p></p></td>
							<td><p></p></td>
						</tr>
						<tr>
							<td><h6></h6><br></td>
							<td><h6></h6><br></td>
							<td><h6></h6><br></td>
							<td><h6></h6><br></td>
						</tr>
						<tr>
							<td><p class="w3-center">

							</p></td>
							<td><p class="w3-center">

							</p></td>
							<td><p class="w3-center">

							</p></td>
							<td><p class="w3-center">

							</p></td>
						</tr>
						<tr>




						</tr>
					</table>
				</div>
		</div>
	</div>


	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<!--___________________________SERVICE________________________________>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<div class="w3-content" style="max-width:1100px">
		<div class="w3-content w3-center pgElem hideElem" id="services">
				<h2 class="w3-wide">Nos services</h2>
					<p class="w3-center">Mandomangi est une agence événementielle spécialisée dans la promotion de la cuisine italienne à l’étranger. Notre objectif est de promouvoir les acteurs de la gastronomie italienne de qualité en France et les producteurs italiens qui souhaitent entrer sur le marché français, à travers l’organisation d’événements, la réalisation de stratégies de communication et la création de vidéos.</p>
				<div class="w3-row w3-padding-32">
					<div class="w3-third">
						<p>Organisation d’événements </p>
						<img src="img/événement.jpg" class="w3-round w3-margin-bottom" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Nous nous occupons de tout ce qu’il faut pour organiser votre événement, qu’il soit un atelier de cuisine, une dégustation de vos produits, un apéro, un masterclass, un salon gastronomique…</p>
					</div>
					<div class="w3-third">
						<p>Communication </p>
						<img src="img/communication.jpg" class="w3-round w3-margin-bottom" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Mandomangi vous propose ses services de communication pour votre événement!<br> Réseaux sociaux, rédaction d’articles, communiqués de presse, invitation de food blogger et beaucoup d’autre !</p>
					</div>
					<div class="w3-third">
						<p>Création de vidéos</p>
						<img src="img/vidéo.jpg" class="w3-round w3-margin-bottom" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Pour promouvoir au mieux votre événement et vos prochaines initiatives, nous réalisons des vidéos promotionnelles des événements, de vos produits et de votre activité. </p>
					</div>
				</div>
				<div class="w3-row w3-padding-32">
				<h2 class="w3-wide">Nos Valeurs</h2>
					<div class="w3-third">
						<p>Passione italiana</p>
						<img src="img/Passion Italienne (2).jpg" class="w3-round w3-margin-bottom" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin">  Nous sommes experts et passionnés de gastronomie italienne et nous croyons fortement dans l'importance de partager la culture culinaire !<br>
							Notre objectif est de faire connaître l'authenticité de cette cuisine en France, une tendance qui vit un incroyable boom dans ces dernières années et qui mérite d’être promue !</p>
					</div>
					<div class="w3-third">
						<p>Compétences</p>
						<img src="/img/Compétence.jpg" class="w3-round w3-margin-bottom" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Notre squadra est composée en majorité par des italiens, avec des profils totalement complémentaires: commercial, marketing, communication, informatique et.. gourmandise ! Notre équipe est à votre écoute pour organiser votre prochaine événement !</p>
					</div>
					<div class="w3-third">
						<p>Réseau</p>
						<img src="img/reseau.jpg" class="w3-round w3-margin-bottom" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin"> Grâce au soutien des institutions et aux contacts avec les médias locaux, les food bloggers, les associations et les institutions françaises et italiennes, Mandomangi collabore avec plusieurs professionnels dans le domaine de la nourriture de qualité.</p>
					</div>
				</div>
		</div>
	</div>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
	<!--___________________________PRESSE_________________________________>
	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
<div class="w3-content w3-center w3-row-padding pgElem hideElem" style="margin-bottom:128px;max-width:800px;" id="presse">
	<h2 class="w3-wide">Presse</h2>
	<p class="w3-opacity"><i>On parle de nous</i></p>
  <div class="w3-half">
    <a href="https://www.lebonbon.fr/lyon/loisirs/dolce-vita-la-place-sathonay-va-se-transformer-en-paradis-de-la-gastronomie-italienne/">
			<img src="/img/Presse/i1.png" style="width:100%" class="article">
		</a>
    <a href="https://www.leprogres.fr/rhone-69-edition-lyon-metropole/2019/04/04/lyon-premier-marche-italien-festif-et-gourmand-place-sathonay?fbclid=IwAR1iFo0WpqDtntnYgfNRgXEuiCZ5bzprGBNl2nYSN8XjslQgfB_Rjt42dJw">
			<img src="/img/Presse/i2.jpg" style="width:100%" class="article">
		</a>
		<a href="https://www.tonicradio.fr/les-bons-plans-du-5-au-7-avril/">
			<img src="/img/Presse/i3.png" style="width:100%" class="article">
		</a>
		<a href="https://tribunedelyon.fr/2019/04/03/le-meilleur-de-litalie-italobio/?fbclid=IwAR1ZYrdh2xP6CnPpz8bWk2Kq65rd9Ji2PjECSxE2DMrmHfekw4mO0uxdk6E">
			<img src="/img/Presse/i8.png" style="width:100%" class="article">
		</a>
		<a href="http://www.ccielyon.com/IT/activites.aspx?id=106">
			<img src="	img/Presse/cci presse italoebio.png" style="width:100%" class="article">
		</a>
		<a href="https://www.lyon-france.com/c-est-lyon-qui-regale/ateliers-de-cuisine/en-cuisine-avec-nonna">
			<img src="img/Presse/en cuisine avec nonna presse.jpg" style="width:100%" class="article">
		</a>
  </div>

  <div class="w3-half">
		<a href="/img/Presse/i4.jpg">
			<img src="/img/Presse/i4.jpg" style="width:100%" class="article">
		</a>
		<a href="https://lyon.citycrunch.fr/que-faire-a-lyon-ce-week-end-5-6-et-7-avril-2019/2019/04/05/">
			<img src="/img/Presse/i5.png" style="width:100%" class="article">
		</a>
		<a href="/img/Presse/i6.png">
			<img src="/img/Presse/i6.png" style="width:100%" class="article">
		</a>
		<a href="https://lacroixroussienne.com/2019/04/01/viva-italia/">
			<img src="/img/Presse/i7.png" style="width:100%" class="article">
		</a>
		<a href="https://lacroixroussienne.com/2019/04/01/viva-italia/">
			<img src="img/Presse/en cuisine avec nonna presse.png" style="width:100%" class="article">
		</a>
		<a href="https://iiclione.esteri.it/iic_lione/fr/gli_eventi/calendario/2019/06/a-signaler-atelier-de-cuisine-italienne.html">
			<img src="img/Presse/en cuisine avec nonna presse 2.png" style="width:100%" class="article">
		</a>
		<a href="img/Presse/IMG_20190627_103952.jpg">
			<img src="img/Presse/IMG_20190627_103952.jpg" style="width:100%" class="article">
		</a>
  </div>
</div>

<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<!--___________________________EVENEMENTS_____________________________>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
  <div class="w3-content w3-center pgElem hideElem" id="events" style="max-width:800px">
		<div class="pContainer" >
	      <h2 class="w3-wide">Événements</h2>
				<div class="w3-container w3-content w3-center ">

					<div class="w3-container w3-content w3-center w3-margin">
						<p class="w3-center">
							Mandomangi est une agence événementielle spécialisée dans la promotion de la cuisine italienne authentique.
							<br>
							<br>
							Notre objectif est de promouvoir les acteurs de la gastronomie italienne à l'étranger et les producteurs italiens des excellences italiennes  à travers l'organisation d'événements.
						</p>
					</div>

					<div class="slider slider-for w3-padding-large" style="height:60vh;">
						<?php
								foreach (scandir('img/sliderEvents') as $key => $value) {
									if ($value !== "." && $value !== "..") {
										echo '<div class="imgEventsElem"> <img src="img/sliderEvents/'.$value.'"/> <div class = "caption"><strong>'.strtok($value,"().").'</strong></div> </div>';
									}
								};
						 	?>
					</div>
					<div class="slider slider-nav w3-padding-large" style="height:20vh;">
						<?php
								foreach (scandir('img/sliderEvents') as $key => $value) {
									if ($value !== "." && $value !== "..") {
										echo '<div class="imgEventsElemNav"> <img src="img/sliderEvents/'.$value.'" style="width:20vw;height:auto;object-fit: cover"></div>';
									}
								};
						 	?>
					</div>
					<div class="w3-container w3-content w3-center w3-margin">
						<p class="w3-center">
						Nous avons déjà organisé: <i>ateliers de cuisine, show cooking, dégustations pédagogiques, lancements de produit, soirées à thème, salons et  villages dédiés à la gastronomie italienne...</i>
						<br>
						<br>
						Mandomangi s'occupe de votre événement de la conception à la dernière étape de la réalisation et vous propose ses services de communication pour vous donner toute la visibilité que vous méritez.
						<br>
						<br>
						Désirez-vous organiser un événement gastronomique pour votre activité mais vous n’avez pas d’idée ?
						<br>
						Avez-vous des super idées pour votre événement, mais vous ne savez pas comment les réaliser ?
						<br>
						<br>
						<a href="<?php  echo "/index.html.php#formOpener"?>">Contactez-nous :</a> nous allons vous proposer un événement pensé pour vous !
						</p>
					</div>
		    </div>
		</div>
		</script>
    <div class="w3-row-padding w3-padding-16">
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/444333479445691/"><img src="/img/event1.jpg" class="enlargePic">
				</a>
        <div class="w3-container w3-white">
          <p>Masterclass</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/816109982088516/"><img src="/img/event2.jpg" class="enlargePic">
				</a>
        <div class="w3-container w3-white">
          <p>Atelier de cuisine italienne</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/557334711456898/"><img src="/img/event3.png" class="enlargePic">
				</a>
        <div class="w3-container w3-white">
          <p>Salons en exterieur</p>
        </div>
      </div>
    </div>

  </div>
	<?php include 'footer.php' ;?>
	</body>
	</html>
