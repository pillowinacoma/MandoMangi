<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand " href="<?php  echo "/index.html.php"?>">
			<img src=<?php  echo "/img/logoMando1.jpg" ?> style="width:auto;height: 4vw; padding : 0px ; margin : 0px">
  </a>

  <?php
  $tab = array("acceuil"=>"","agence"=>"","blog"=>"","guide"=>"");
  $tab[$title] = "active";
  ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($tab["acceuil"]);?>">
          <a class="nav-link " href=<?php echo "/index.html.php";?>>Accueil </a>
        </li>
        <li class="nav-item <?php echo ($tab["guide"]);?>">
          <a class="nav-link " href="http://guide.mandomangi.com" >Guide</a>
        </li>
        <li class="nav-item <?php echo ($tab["blog"]);?>">
          <a class="nav-link " href="http://guide.mandomangi.com/tips-articles">Blog</a>
        </li>
        <li class="nav-item dropdown <?php echo ($tab["agence"]);?>">
          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" id="Agence"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Agence
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo "/agence.html.php#equipe";?>" onclick="showElem('equipe');">Équipe</a>
            <a class="dropdown-item" href="<?php echo "/agence.html.php#events";?>" onclick="showElem('events');">Événements</a>
            <a class="dropdown-item" href="<?php echo "/agence.html.php#services";?>" onclick="showElem('services');">Services</a>
            <a class="dropdown-item" href="<?php echo "/agence.html.php#presse";?>" onclick="showElem('presse');">Presse</a>
          </div>
        </li>

      </ul>
  </div>
</nav>
