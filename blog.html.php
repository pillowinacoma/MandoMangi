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
	<?php	$title = "blog";
	include 'navbar.php';
	include 'functions.php';
	?>
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
	<?php
		createBlog();
	?>
	</div>

</body>
</html>
