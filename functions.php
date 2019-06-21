<?php
  function valideForm(&$method, $tabCles) {
      foreach ($tabCles as $cle) {
          if (!isset($method[$cle]))
              return FALSE;
          if (!$method[$cle])
              return FALSE;
          }
    return TRUE;
  }
  function createBlogTbNl($titre,$pTitre,$img,$link){
    echo"
      <a href=\"$link\">
      <div class=\"w3-quarter\">
      <img src=\"$img\" alt=\"$titre\" style=\"width:100%;height: 20vh;object-fit: cover;\">
      <h3>$titre</h3>
      <p>$pTitre</p>
    </div>
    </a>";
  }
  function createBlog(){
    $files = scandir('articles/');
    echo "<div class=\"w3-row-padding w3-padding-16 w3-center\" id=_\"food\">\n";
    for ($i=2; $i < sizeof($files); $i++) {
      if (($i-2)%4 == 0) {
        echo "
        </div>
        <div class=\"w3-row-padding w3-padding-16 w3-center\" id=_\"food\">\n";
      }
      $fh = fopen('articles/'.$files[$i].'/registre.txt',"r");
      $tmp = explode("\n",fread($fh,filesize('articles/'.$files[$i].'/registre.txt')));
      $titre = $tmp[0];
      $pTitre = $tmp[1];
      fclose($fh);
      $img = glob('articles/'.$files[$i].'/1.*')[0];
      $link = 'articles/'.$files[$i].'/index.html.php';
      createBlogTbNl($titre,$pTitre,$img,$link);
    }
    echo "</div>";
  }
  function createEventTbNl($titre,$description,$img,$link){
    echo"<div class=\"w3-third w3-container w3-margin-bottom\">
      <img src=\"$img\" style=\"width:100%;height:40vh;object-fit:cover;\" class=\"w3-hover-opacity\">
      <div class=\"w3-container w3-white\">
        <p><b>$titre</b></p>
        <p>$description</p>
      </div>
    </div>";
  }
  function createEvent(){
    $files = scandir('articles/');
    echo "<div class=\"w3-row-padding w3-padding-16 w3-center\" id=_\"food\">\n";
    for ($i=2; $i < sizeof($files); $i++) {
      if (($i-2)%4 == 0) {
        echo "
        </div>
        <div class=\"w3-row-padding w3-padding-16 w3-center\" id=_\"food\">\n";
      }
      $fh = fopen('articles/'.$files[$i].'/registre.txt',"r");
      $tmp = explode("\n",fread($fh,filesize('articles/'.$files[$i].'/registre.txt')));
      $titre = $tmp[0];
      $pTitre = $tmp[1];
      fclose($fh);
      $img = glob('articles/'.$files[$i].'/1.*')[0];
      $link = 'articles/'.$files[$i].'/index.html.php';
      createBlogTbNl($titre,$pTitre,$img,$link);
    }
    echo "</div>";
  }
?>
