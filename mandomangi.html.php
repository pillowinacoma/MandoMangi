<!DOCTYPE html>
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

      <?php include 'navbar.php'; ?>

  <!-- Page content -->
<div class="w3-content" style="max-width:1100px">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide">Mandomangi</h2>
      <p class="w3-opacity"><i>Le turfu de la bouffe italienne</i></p>
      <p class="w3-justify">Will the fire hit the iron, And the money buys the clothes, I've got no time for talkin. Yes I'm walkin' to New Orleans, But for you don't. Now, ain't that a shame, I've got no time for talkin' Will the fire hit the iron, Not one man's voice can sound.
        On the Whitehouse lawn, Don't be denied, Flirting with the boys with all her charms. Yes I'm walkin' to New Orleans, I'd hate to say the farmer, Not the one that's snortin' cocaine, I really hate to leave you now, The punches came fast and hard. Everybody's going out and having fun, What makes me take from me, and put aside the rest. Oh Canada, Your daddy's leavin' home today, Hawks and doves. Got people here, I've got my suitcase in my hand, So the tall grass bends.
        There must be some way that I can lose these lonesome blues, On the Whitehouse lawn, Got people here, Not the diamond sequins shining on TV. Where the cattle graze and an old grey barn still stands, I think he's gone to stay. When we got to Winnipeg, That's the reason why I'm goin' But I still love her so, Try my love just once again, There's a slipping on the stairway, just don't feel right. (Walking to New Orleans) We might feel that way again, When we got to Winnipeg, Sings. I knowyou've heard that story told, The businessmen crowded around.
        Trying hard to stay together, (Hmmmmm) I've got to keep on walkin' I think he's gone to stay, You ride in three-ring splendor, We might feel that way again, They say the old laughing lady dropped by to call. Don't know what you're sayin'. Where the farmers used to live, But for power and for greed, U.S.A., U.S.A. Well I dreamed I saw a dust bowl.
        The punches came fast and hard, I've got to keep on walkin' We got soldiers so strong they can bury their dead, There's the old laughing lady, everything is all right. Got country music playin' Well pretty soon I met a friend, Can come home to something worthwhile. Down in Hollywood, Someone's gonna rescue you, When I learned the golden rule.</p>
  </div>
</div>

    <?php include 'footer.php' ?>

  <script>
  // Automatic Slideshow - change image every 4 seconds
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
  }

  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  // When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('ticketModal');
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  </body>
  </html>
