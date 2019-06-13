<html>
<head>
	<title>Mandomangi</title>
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

	<div class="w3-content" style="max-width:1100px">

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <div class="w3-row w3-padding-32">

						<div class="w3-quarter box">
	          <a href="Mandomangi.html.php">
							<img src="img/103-2592x1936.jpg" class="sw3-margin-bottom postcardy" id="Mando" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Mando').classList.add('blurryImg');" onmouseleave="document.getElementById('Mando').classList.remove('blurryImg');">Mandomangi</div>
						</a>

				</div>
						<div class="w3-quarter box">
	          <a href="Events.html.php">
							<img src="img/1003-1181x1772.jpg" class="sw3-margin-bottom postcardy" id="Events" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Events').classList.add('blurryImg');" onmouseleave="document.getElementById('Events').classList.remove('blurryImg');">Evenements</div>
						</a>
				</div>
						<div class="w3-quarter box">
	          <a href="Service.html.php">
							<img src="img/1025-4951x3301.jpg" class="sw3-margin-bottom postcardy" id="Services" style="width:100%;height: 80vh;object-fit: cover">
					    <div class="text" onmouseover="document.getElementById('Services').classList.add('blurryImg');" onmouseleave="document.getElementById('Services').classList.remove('blurryImg');">Services</div>
						</a>
        	</div>
					<div class="w3-quarter box">
						<a href="Presse.html.php">
							<img src="img/1024-1920x1280.jpg" class="sw3-margin-bottom postcardy" id="Presse" style="width:100%;height: 80vh;object-fit: cover">
							<div class="text" onmouseover="document.getElementById('Services').classList.add('blurryImg');" onmouseleave="document.getElementById('Services').classList.remove('blurryImg');">Presse</div>
						</a>
					</div>
				</div>

				 </div>
  </div>

	<?php include 'footer.php' ;?>

	</body>
	</html>
