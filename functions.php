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
      <img src=\"$img\" alt=\"$titre\" style=\"width:100%;height: 20vh;object-fit: cover;\"></a>
      <h3>$titre</h3>
      <p>$pTitre</p>
    </div>";
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
?>
