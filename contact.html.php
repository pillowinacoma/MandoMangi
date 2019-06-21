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
  <script src="js/gen_validatorv4.js" type="text/javascript"></script>
</head>
<body>
	<!-- Navbar (sit on top) -->
	<?php	$title = "contact";
	include 'navbar.php';
	?>
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <!-- Contact Section -->
    <div class="w3-container w3-padding-64" id="contact">
      <h1>Contactez-nous</h1><br>
      <p>Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous Contactez-nous</p>
      <p class="w3-text-blue-grey w3-large"><b>666 Rue Adresse, Lyon, France</b></p>
      <p>Contactez-nous 066666666666 Contactez-nous 666mail@mailmail.com,Contactez-nous  :</p>
      <form method="post" id="myform">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Nom" required name="Nom"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Prenom" required name="Prenom"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Commentaire" required name="Message"></p>
        <p><button class="w3-button w3-light-grey w3-section" type="submit">Envoyer</button></p>
      </form>
      <script type="text/javascript">
          var frmvalidator  = new Validator("myform");
          frmvalidator.addValidation("Nom","req","Saisissez votre nom");
          frmvalidator.addValidation("Prenom","req","Saisissez votre prenom");
          frmvalidator.addValidation("Email","req","Saisissez votre email");
          frmvalidator.addValidation("Message","req","Saisissez un message");
          frmvalidator.addValidation("Email","email","Saisissez une adresse mail valide");
			</script>

					<?php
					use PHPMailer\PHPMailer\PHPMailer;
					use PHPMailer\PHPMailer\Exception;
					require './PHPMailer/src/Exception.php';
					require './PHPMailer/src/PHPMailer.php';
					require './PHPMailer/src/SMTP.php';

					$errors = '';
					$myemail = 'com.mandomangi@gmail.com';
					if (empty($_POST['Nom'])||empty($_POST['Prenom'])||empty($_POST['Nom'])||empty($_POST['Message'])) {$errors .= '\n veillez remplir tout les champs';}
					$nom = $_POST['Nom'];
					$prenom = $_POST['Prenom'];
					$addMail = $_POST['Email'];
					$message = $_POST['Message'];
					if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $addMail)){
						$errors .= "\n Error: Invalid email address";
					}

					if (empty($errors)) {
						$mail = new PHPMailer();
						$mail->isSMTP();
						$mail->SMTPAuth = true;
						$mail->SMTPSecure = 'ssl';
						$mail->Host = 'smtp.gmail.com';
						$mail->Port = '465';
						$mail->isHTML();
						$mail->Username = 'noreplymandomangi@gmail.com';
						$mail->Password = '@Mandomangistartup2019';
						$mail->SetFrom('noReply@mandomangi.com');
						$mail->Subject = "vous avez eu un message de la part de: $nom $prenom";
						$mail->Body = "Nouveau message recu".
						"Nom : $nom\n".
						"Prenom : $prenom\n".
						"Email : $addMail\n".
						"Message : $message :\n";
						$mail->AddAddress($myemail);

						if ($mail->Send()){
							echo "<p>Message sent</p>";
						}else{
							echo "<p>echec</p>";
						}
					}
					?>
    </div>
	</div>


</body>
</html>
