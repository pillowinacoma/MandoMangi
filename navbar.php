<div class="w3-top">
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
