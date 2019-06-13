<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>get</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    </head>
    <body>
 <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.html.php" class="w3-bar-item">
			<img src="../../img/logoMando1.jpg" style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a>
			<div class="w3-right w3-hide-small navbar">
					<?php
					$tab = array("agence"=>"","blog"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href="agence.html.php" style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href="blog.html.php" style="margin : 1vh" >Blog</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["guide"]);?>" href="guide.html.php" style="margin : 1vh" >Guide</a>
			</div>
	</div>
</div>

          <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
            <div class="w3-content" style="max-width:2000px;margin-top:46px">
          		<div class="w3-display-container w3-center">
          	    <img src="<?php
                if(is_file('1.jpg')){
                      echo "1.jpg";
                }else{
                      echo "https://www.gannett-cdn.com/-mm-/d45a1bc902cb3f4367b332e27f859c7252d4b7fa/c=0-109-2119-1306/local/-/media/2019/04/12/USATODAY/USATODAY/636906715367623091-GettyImages-1054857274.jpg?width=3200&height=1680&fit=crop";
                    }
                ?>"style="width: 100%;max-height:80vh;object-fit: cover;">
          	    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          	      <h3>Dire Straits</h3>
          	      <p><b>Lorem ipsum from Dire Straits lyrics</b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Dire Straits">
          <?php echo $_SERVER['_']."blog.html.php"; ?>
          <p class="w3-justify"><?php echo(str_replace(array("\n","'"),array("<br>", "'"),"Then she's reading about a swing to the right, I got the latest side of the story, Wind it blows around in her hair and the flags upon the poles, Yes heaven's in the world, Just a-crazy for the girl. There's nothing but the same old news, They're all in the station praying for trains, They're all in the station praying for trains, A three-chord symphony crashes into space, Your injured looks. Can't get no sleeves for my records, Gonna ride across the river deep and wide, Her evening paper is horror torn, One two one two three four. Hey maestro she said expresso now, Like a Bowery bum when he finally understands, See I'm crazy for the girl, Today in the mountains, tomorrow the world, What you taking me for. Just like a saxophone was made to go with the night, Is this just expresso love.

Because she smells like a rose, Looking so bereaved and so bereft, The moon is hanging upside down. When she says boys don't know anything, I got the latest side of the story, Her evening paper is horror torn, A three-chord symphony crashes into space, Put her hand on my hip. Today in the mountains, tomorrow the world, Can't get no remedy on my TV, Can't get no sleeves for my records, You must have had a passkey made out of wax. Right become the wrong, the left become the right, And you never did have the intelligence to use. Can't find the reasons for your actions, We are ready to pay with our lives if we must. Waiting in the crowd to cross at the light, I'd do anything to reach her, Take it take it. Ba ba ba ba boom, I can't get no antidote for blues.

You're just making me out to be your clown, Stands to reason I've got to leave you alone, Say what he mean. Now, I'm talking power in the barrel of a gun, Seems to me such a waste, We are ready to pay with our lives if we must. I wanna be free of that thing - I don't want it no more, Speculation rife, Your injured looks, I don't know why it is I'm still on the case. My my my my, You gotta be on somebody's books, Just lumps of fur and that was it, I say hey maestro expresso now, That writes the plays we act. You take away my mind like you take away the top of a tin, The twelve keys hanging off my chain, Say what he mean.

And I get trouble with my breathing, Yeah she call me just to talk, Well she's my lover she's a friend of mine. Says - what can I tell you, as I'm standing next to you, All you wanted was a piece of the action, And most of the taxis, most of the whores. They can't find a way to be, I got me my very own anti tank gun. Because she smells like a rose, Ba ba ba ba bomb, They can't find a way to be, One blade - tearing me apart, And every victory has a taste that's bittersweet. Oh she was made in heaven, And you never did have the intelligence to use, I never saw you breaking no law, Between the satin beaus and their belles. Cause there's a time for talking and a time to shoot them down, Somebody at the airport, Gonna ride across the river deep and wide."))?>
          </p>
        </div>

        </body>
      </html>
