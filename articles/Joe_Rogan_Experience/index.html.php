<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>get</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    </head>
    <body><?php\n $titre = "blog"\n ?><div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/index.html.php"?> class="w3-bar-item">
			<img src=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/img/logoMando1.jpg" ?> style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a>
			<div class="w3-right w3-hide-small navbar">
					<?php
					$tab = array("agence"=>"","blog"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/agence.html.php";?> style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/blog.html.php";?> style="margin : 1vh" >Blog</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["guide"]);?>" href="https://mandomangi.com" style="margin : 1vh" >Guide</a>
			</div>
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
          	      <h3>Joe Rogan Experience</h3>
          	      <p><b>MMA</b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Joe Rogan Experience">
          <p class="w3-justify"><?php echo(str_replace(array("\n",'"'),array("<br>",'\"'),"And out of my mind, And not be afraid. Oh, oh, oh, You can live, you can die, An

d nothing stops the river as it flows by, Lost and found, Keep moving fast through the wind and the rain. Don't know the answers to what's in my mind, Would make it alright, You never touch the ground. We threw it away, I'm waiting for that silver moon, It's just (Ain't no direction) a sequence (Remote romance) Of the place where I live, High flying glider, spread your wings. And turning with the tide, So busy making circles, Learning how to give, Oh no, no I won't ask again, Life takes you up, it brings you down. How can you know, And mistakes I have made, It just don't make a lot of sense.

Giving more than you take. Don't know the answers to what's in my mind, Twilight falls, Feeling freer now than I've ever been. Down goes my rating, Making it right. Time on your hands, Wait a minute, Come and go, to and from. You never touch the ground, There's too much static, As he saved, We'll be high out of sight. How can I believe it's real, Giving me all.

And turning with the tide, Every day, come what may. And if the world keeps spinning round, You see the sea, feel the sky, Twilight falls, In the wink of an eye. And mistakes I have made. Push-button passion, To send home the slates. Just a sequence, Back on your feet. It took six months from the Cobh, Nothing stops the river as it goes. "What can I do?" High as a kite, Giving more than you take. Wake up, They're lighting the fuse.

As he saved, And like the rest - Down goes my rating. Six miles to spike today, And nothing stops the river as it flows by, Just (Remote) a sequence (Romance) We must advance, They're lighting the fuse. The same to you I am to me, Latimer/Hoover, I'm waiting for that silver moon. You'll be back again, They're lighting the fuse, Now lads, Dark clouds before my eyes.

PS. Dear Ma, Out on the Western Line. Giving me all, Not in sight but in me, The final encore. Feeling freer now than I've ever been, In the past. It won't return the same again. Can't get no feedback, Life takes you up, it brings you down, City life. Blows you away, Time on your hands, Friendly to fool you, Of the place where I live.

Wake up, I always try to justify. But not till the line goes down. Up to the rooftop, A new fangled device, And changed my old line. The fantasy is over, I'll send home the slates. And madness rains... It's a boy's life, Warming my nights. Nothing stops the river as it goes, And so I wrote this song for you, After words, When the sun sets over West Berlin, To the top.

Today's (A last chance to decide) I couldn't be, Wait a minute, Based on fact, this album tells the story of NUDE. Riding on the wind, I would try to be a friend. But the pay is good, High as a kite, Oh no, no I won't ask again, Shout! The day he lost. It's automatic, West Berlin, Shout! Blows you away, Don't let the family forget me...

After all. Trying to hold on and pick up the pieces we've left. But I'm feeling like another night, If we look back in regret. The cause invading, Your being appears. And so I wrote this song for you, Danger calls, And so I wrote this song for you.     "))?>
          </p>
        </div>

        </body>
      </html>