<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>get</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    </head>
    <body><div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href=<?php  echo $_SERVER["_"]."/index.html.php"?> class="w3-bar-item">
			<img src=<?php  echo $_SERVER["_"]."/img/logoMando1.jpg" ?> style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a>
			<div class="w3-right w3-hide-small navbar">
					<?php
					$tab = array("agence"=>"","blog"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href=<?php echo $_SERVER["_"]."/agence.html.php";?> style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href=<?php echo $_SERVER["_"]."/blog.html.php";?> style="margin : 1vh" >Blog</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["guide"]);?>" href=<?php echo $_SERVER["_"]."/guide.html.php";?> style="margin : 1vh" >Guide</a>
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
          	      <h3>Chiara</h3>
          	      <p><b>mandomangi</b></p>
          	    </div>
          	  </div>
            </div>
          </header>

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Chiara">
          <p class="w3-justify"><?php echo(str_replace(array("\n",'"'),array("<br>",'\"'),"ple of weeks ago I posted how to read through a directory with PHP using the opendir() readdir() and closedir() functions and now look at the glob() function. glob() returns the filenames into an array and supports pattern matching so it can be very easy to find e.g. jpg images in a particular directory.
Example directory

The examples below look at a directory with the following, the same example directory as used in the read through directory post:

bar.txt       A regular file
baz           A directory
foo.txt       A regular file
link2foo.txt  A symbolic link to foo.txt

Simple example

To find all the files in the directory /path/to/directory with a .txt file extension, you can do this:

$files = glob

T be empty.
Example using braces

There are flags which can be passed as a second optional parameter. One of these is GLOB_BRACE which means that e.g. {jpg,gif,png} will be expanded to match jpg, gif and png which can be useful if you need to look for a particular set of files by their extension, in this example for image files.

If the example directory also had the files 1.jpg, 2.gif and 3.png then you can do this to get glob to return just the image files:


print_r($files) would echo:"))?>
          </p>
        </div>

        </body>
      </html>
