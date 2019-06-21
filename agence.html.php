<html>
<head>
	<title>Agence Mandomangi – Evénements et cuisine italienne </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
	<!-- Navbar (sit on top) -->
	<?php	$title = "agence"; 	include 'navbar.php';?>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript">
	function showElem(classToSelect){
		Array.from(document.getElementsByClassName("pgElem")).map(function(elem){
			if(elem.id === classToSelect){
				elem.classList.add('dispElem');
				elem.classList.remove('hideElem');
			}else{
				elem.classList.remove('dispElem');
				elem.classList.add('hideElem');
			}
		});
	}
	$(document).ready(function(){
		showElem(window.location.hash.substr(1));
	});
	</script>
	<div class="w3-content" style="max-width:1100px">

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <div class="w3-row w3-padding-32">
						<div class="w3-quarter box">
	          <a href="#equipe" onclick="showElem('equipe');">
							<img src="/img/equipe.jpg" class="sw3-margin-bottom postcardy" id="Mando" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Mando').classList.add('blurryImg');" onmouseleave="document.getElementById('Mando').classList.remove('blurryImg');">Équipe</div>
						</a>

				</div>
						<div class="w3-quarter box">
	          <a href="#events" onclick="showElem('events');">
							<img src="/img/evenements1.png" class="sw3-margin-bottom postcardy" id="Events" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Events').classList.add('blurryImg');" onmouseleave="document.getElementById('Events').classList.remove('blurryImg');">Evenements</div>
						</a>
				</div>
						<div class="w3-quarter box">
	          <a href="#services" onclick="showElem('services');">
							<img src="/img/services.jpg" class="sw3-margin-bottom postcardy" id="Services" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Services').classList.add('blurryImg');" onmouseleave="document.getElementById('Services').classList.remove('blurryImg');">Services</div>
						</a>
        	</div>
					<div class="w3-quarter box">
						<a href="#presse" onclick="showElem('presse');">
							<img src="/img/presse.jpg" class="sw3-margin-bottom postcardy" id="Presse" style="width:100%;height: 80vh;object-fit: cover">
							<div class="text" onmouseover="document.getElementById('Presse').classList.add('blurryImg');" onmouseleave="document.getElementById('Presse').classList.remove('blurryImg');">Presse</div>
						</a>
					</div>
				</div>

				 </div>
  </div>

	<!-- Page content -->
	<div class="w3-content" style="max-width:1100px">
		<div class="w3-container w3-content w3-center w3-padding-64 pgElem hideElem" style="max-width:800px" id="equipe">
				<h2 class="w3-wide">L'ÉQUIPE</h2>
				<p class="w3-opacity"><i>We love LA BOUFFE</i></p>
				<p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
					adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="w3-row w3-padding-32">
					<div class="w3-third">
						<p>Michel</p>
						<img src="img/man-388104_640.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
					</div>
					<div class="w3-third">
						<p>Fatima</p>
						<img src="img/Kayla_Person-small.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
					</div>
					<div class="w3-third">
						<p>Donald</p>
						<img src="img/terry-crews-person-of-year-2017-time-magazine-2.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
					</div>
				</div>
		</div>
	</div>


	<!-- Page content -->
	<div class="w3-content" style="max-width:1100px">
		<div class="w3-container w3-content w3-center w3-padding-64 pgElem hideElem" id="services">
				<h2 class="w3-wide">Services</h2>
				<p class="w3-opacity"><i>Nos Services</i></p>
					<p class="w3-justify">Mandomangi est une agence événementielle spécialisée dans la promotion de la cuisine italienne à l’étranger. Notre objectif est de promouvoir les acteurs de la gastronomie italienne de qualité en France et les producteurs italiens qui souhaitent entrer sur le marché français, à travers l’organisation d’événements, la réalisation de stratégies de communication et la création de vidéos.</p>
				<div class="w3-row w3-padding-32">
					<div class="w3-third">
						<p>Organisation d’événements </p>
						<img src="img/événement.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Nous nous occupons de tout ce qu’il faut pour organiser votre événement, qu’il soit un atelier de cuisine, une dégustation de vos produits, un apéro, un masterclass, un salon gastronomique…</p>
					</div>
					<div class="w3-third">
						<p>Communication </p>
						<img src="img/communication.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Mandomangi vous propose ses services de communication pour votre événement ! Réseaux sociaux, rédaction d’articles, communiqués de presse, invitation de food blogger et beaucoup d’autre !</p>
					</div>
					<div class="w3-third">
						<p>Création de vidéos</p>
						<img src="img/vidéo.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Pour promouvoir au mieux votre événement et vos prochaines initiatives, nous réalisons des vidéos promotionnelles des événements, de vos produits et de votre activité. </p>
					</div>
				</div>
				<div class="w3-row w3-padding-32">
				<h2 class="w3-wide">Valeurs</h2>
	      <p class="w3-opacity"><i>Nos Valeurs</i></p>
					<div class="w3-third">
						<p>Passion italienne</p>
						<img src="https://media.istockphoto.com/vectors/map-of-italy-with-italian-flag-on-white-background-vector-id455326941?k=6&m=455326941&s=612x612&w=0&h=DCE70NDGw05z9_f0sV9RAD87j01eLULTODrI0Rqy5_k=" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin"> Nous sommes passionnés de la cuisine italienne et nous croyons dans la valeur du Made in Italy, excellence mondiale. Notre objectif est de combattre la contrefaçon et l’Italian Sounding pour aider les acteurs de la gastronomie italienne authentique. </p>
					</div>
					<div class="w3-third">
						<p>Compétences</p>
						<img src="img/hard-working-icon-20.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin">Notre équipe peut compter sur plusieurs profils complémentaires et compétents dans leur domaine. Mandomangi est composé par des jeunes formés en commerce, communication, marketing, production audiovisuelle et informatique. </p>
					</div>
					<div class="w3-third">
						<p>Réseau</p>
						<img src="https://www.pinclipart.com/picdir/big/85-859673_people-network-icon-png-clipart.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%;height: 40vh;object-fit: cover">
						<p class="w3-margin"> Grâce au soutien des institutions et aux contacts avec les médias locaux, les food bloggers, les associations et les institutions françaises et italiennes, Mandomangi collabore avec plusieurs professionnels dans le domaine de la nourriture de qualité. </p>
					</div>
				</div>
		</div>
	</div>
<!-- Photo Grid -->
<div class="w3-container w3-content w3-center w3-row-padding pgElem hideElem" style="margin-bottom:128px;max-width:800px;" id="presse">
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
  </div>
</div>


  <div class="w3-container w3-content w3-center w3-padding-64 pgElem hideElem" id="events">
		<!--Title-->
		<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
	      <h2 class="w3-wide">Évenements</h2>
	      <p class="w3-justify">
							Mandomangi organise plusieurs types d’événement et vous propose la solution la plus adaptée à vos besoins. Quelques exemples des événements que nous avons déjà organisés :<br>
							<div class="w3-third">
								<p>Petits événements - événements pour les particuliers</p>
								<li>Atelier de cuisine</li>
								<li>Show Cooking</li>
								<li>Dégustation pédagogique</li>
							</div>
							<div class="w3-third">
								<p>Moyens événements – événements pour les professionnels</p>
								<li>Evénement gastronomique</li>
								<li>Promotion de produits</li>
								<li>Soirée à thème</li>
							</div>
							<div class="w3-third">
								<p>Grand événements – événements pour le grand public</p>
								<li>Village gastronomique</li>
								<li>Salon pour professionnels</li>
								<li>Marché italien</li>
							</div>
						</p>
					</div>
							<div class="w3-container w3-content w3-center w3-margin">
							Vous désirez organiser un événement pour votre activité mais vous n’avez pas d’idée ?<br>Vous avez des super idées pour votre événement, mais vous ne savez pas comment les réaliser ?<br>
							Contactez-nous : nous allons vous proposer un événement pensé pour vous !
						</div>

		<script type="text/javascript">
		function hey(e) {
			document.querySelectorAll();
		};
		</script>
    <!-- First Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/444333479445691/"><img src="/img/event1.jpg" class="enlargePic">
        <div class="w3-container w3-white">
          <p><b>Voyage gastronomique en Méditerranée - Buffet dégustation</b></p>
        </div></a>
      </div>
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/816109982088516/"><img src="/img/event2.jpg" class="enlargePic">
        <div class="w3-container w3-white">
          <p><b>En cuisine avec nonna - Atelier de cuisine italienne</b></p>
        </div></a>
      </div>
      <div class="w3-third w3-container w3-margin-bottom" style="z-index:-1;">
        <a href="https://www.facebook.com/events/557334711456898/"><img src="/img/event3.png" class="enlargePic">
        <div class="w3-container w3-white">
          <p><b>Italo&Bio: la gastronomie italienne, biologique et bien plus !</b></p>
        </div></a>
      </div>
    </div>

  </div>
	<?php include 'footer.php' ;?>
	</body>
	</html>
