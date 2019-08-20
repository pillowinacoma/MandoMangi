<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css"/>
    <script type="text/javascript" src="lib/jquery.js"></script>
  </head>
  <body>
    <script type="text/javascript" src="js/blogScripts.js"></script>
    <?php
    include 'functions.php';
    $websiteUrl = isset($_POST['source'])?$_POST['source']:'http://guide.mandomangi.com/tips-articles/page/2';
    $i = 0;
    function cBlog($wsu){
      echo "<div class=\"w3-row-padding w3-padding-16 w3-center\" id=\"food\">\n";
      $html = file_get_html($wsu);
      foreach ($html->find('.postcard') as $postDiv) {
        if ($i%3 == 0 && $i >= 1 ) {
          echo "
          </div>
          <div class=\"w3-row-padding w3-padding-16 w3-center\" id=\"food\">\n";
        }
        foreach ($postDiv->find('.card__image') as $a) {
            $img = str_replace(array("background-image: url('","')"),array("",""),$a->getAttribute("style","background-image"));
          }
          foreach ($postDiv->find('.card__title') as $a) {
            $titre = $a->plaintext;
            $link = $a->first_child()->getAttribute("href");
          }
          foreach ($postDiv->find('.posted-on') as $a) {
            $date = $a->plaintext;
          }
          foreach ($postDiv->find('.card__links li a ') as $a) {
            $categorie = $a->plaintext;
          }
          createBlogTbNl($titre,$categorie." ".$date,$img,$link);
          $i++;
        }
        echo " <div class=\"w3-row-padding w3-padding-16 w3-center\" id=\"food\">\n";
        foreach ($html->find(".nav-previous") as $key) {
          $lien = $key->firstChild()->getAttribute('href');
          echo "<button onclick = \"getPostCards('$lien')\">".$key->plaintext."</button>";
        }foreach ($html->find(".nav-next") as $key) {
          $lien = $key->firstChild()->getAttribute('href');
          echo "<button onclick = \"getPostCards('$lien')\">".$key->plaintext."</button>";
        }
      }
      cBlog($websiteUrl);
      ?>
  </body>
</html>
