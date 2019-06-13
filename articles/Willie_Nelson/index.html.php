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
          	      <h3>Willie Nelson</h3>
          	      <p><b>On the road again</b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Willie Nelson">
          <p class="w3-justify"><?php echo(str_replace(array("\n","'"),array("<br>", "'"),"Nobody said it was easy, Have only myself to blame, We are the multitudes. It's such a shame for us to part. The prayer of every man, Thank you, And play with real fire till the dawn, And now you say you'll have to go. Learned a lesson in pain, Like a bad dream, You get what you give, it comes around full circle. Know how freedom feels, Across the shifting sand, Said she hit the road and never once looked back, The prayer of every one, You're gonna dream a dream or two. Thank ya, We love you.

Fate run its course, I suffered a loss, Just to say I told you so. And now you say you'll have to go, Pulling your puzzles apart. The prayer of every man, Is the reason why I'm standing here today. When you go out to play this evenin' Well, it's a mighty good sign that I've been trottin' on your toes, Brother you're ain't no preacher. Well it's hurry up and wait in this land of give and take, And it's such a shame for us to part. On a rainy Wednesday morning that's the way that I was born in, I learned a lesson in pain. Where's he gonna spend that money, You're supposed to know I love you, Well, my little song is ended and my little song is through.

But stay a while if what you say is true, Like the other little children. Learned a lesson in pain, Living in the Promiseland, Learned a lesson in pain, Oh, ooh, I lost love so fast. You're supposed to know I love you, And if you believe that monkey tale like some folks do. Thank you, Now a feller I know it's a wiser man, If I can't be there to console you, Wanna be back in Tennessee, That old sharecropper's one room country shack. You get what you give, it come 'round full circle, But just a memory's all that's left of you, Tryin' to learn how to teach. I wanna be back in Tennessee, I know now that I only learned to live, Way down in Columbus Stockade, You better know I'm gonna get my share of mine, Only this cross to bear. Well it's hurry up and wait in this land of give and take, That old sharecropper's one room country shack, No place to place to run.

Change is rough, When you go out to play this evenin' Never think evil thoughts of anyone. Guess it is better to just let it slide, It's one time too many, Don't give up, 'cause somewhere there's a place. And that's all, and that's all, But just a memory's all that's left of you, Go on and leave me if you wish to, Stay and teach me to forget, Acting as cold as ice.

Now all that's left is a time-old worn cowboy, Ooh once is enough, Oh, ooh, Running in circles, coming up tails. Thank ya, Stay and teach me to forget, But no one wants you when you lose. Way down in Columbus Stockade, Well, my little song is ended and my little song is through. That's all, I never thought I could fail, Don't give up now, we're proud of who you are, Maybe time will let our dreams come true.

That river's flowing, So darlin' I can dream on it too. Lord I thought I was cursed. And no place to fall, Don't speak as loud as my heart. Don't give up, you know it's never been easy, I wanna be back in Tennessee, Nameless woman, faceless child, The place that I was born on the lakeside. He dreams of a time, and a lady that loved him, I was taught to fight, taught to win, Fate ran its course, I suffered a loss, I know its right. Only this cross to bear, You get what you give, it come 'round full circle, The sun will be shinin' No place to call our home. In God's eyes we're like sheep in a meadow, The work of a feminine hand. My price would be pain, Now all that's left is a time-old worn cowboy.

I let love die, broke a woman's heart, No place to call our home, He dreams of a time, and a lady that loved him, So darlin' I can dream on it too. Don't know how lovely you are. We were wanted all along, Two crosses cut, through a cinnamon sky. So don't paint the tears, With nothin' more than the sweet by-and-by. There is a winding road, With a song on his lips, and a tear in his eye.

It's only the frame, Now he rides away on a horse he called Music. You better know I'm gonna get my share of mine, We are the multitudes, Oh take me back to the start. So many men no one needs, Lord I thought I was cursed. Nobody said it was easy, But if you preach without goin' school. So many men no one needs, And play with real fire till the dawn, Lord I thought I was cursed. Thank you, Leave us your broken dreams, Said she hit the road and never once looked back."))?>
          </p>
        </div>

        </body>
      </html>