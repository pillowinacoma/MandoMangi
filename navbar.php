<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/index.html.php"?> class="w3-bar-item">
			<img src=<?php  echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/img/logoMando1.jpg" ?> style="max-width : 10vw; padding : 0px ; margin : 0px">
		</a>

      <!-- Sidebar (hidden by default) -->
      <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-bar-item w3-button">Close Menu</a>
      <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
      </nav>
      <!-- Top navigation bar -->
			<div class="w3-right w3-hide-small navbar">
					<?php
					$tab = array("agence"=>"","blog"=>"","contact"=>"","guide"=>"");
					$tab[$title] = "active";
					?>
					<a class="w3-bar-item w3-button <?php echo ($tab["agence"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/agence.html.php";?> style="margin : 1vh" >Agence</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["blog"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/blog.html.php";?> style="margin : 1vh" >Blog</a>
			    <a class="w3-bar-item w3-button <?php echo ($tab["guide"]);?>" href="http://mandomangi.com" style="margin : 1vh" >Guide</a>
          <a class="w3-bar-item w3-button <?php echo ($tab["contact"]);?>" href=<?php echo isset($_SERVER["_"])?$_SERVER['_']:NULL."/contact.html.php";?> style="margin : 1vh" >Contactez nous!</a>
			</div>
  </div>
</div>
