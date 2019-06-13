<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Créer un article</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/stylesheet.css">

  </head>
  <body>
    <?php $title = "blog"; include 'navbar.php'; ?>
    <!-- Formulaire -->
    <div class="w3-container w3-center w3-padding-64" id="">
      <h1>Créer un article</h1><br>
        <form action="createArticle.php" method="post" id="article_form" enctype="multipart/form-data">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Titre" required name="titre"
            <?php if(isset($_POST['titre'])) echo 'value="'.$_POST['titre'].'"';  ?>
          ></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Petit titre" required name="pTitre"
            <?php if(isset($_POST['pTitre'])) echo 'value="'.$_POST['pTitre'].'"';  ?>
          ></p>
          <p><textarea name="article" class="w3-input w3-padding-16" placeholder="Article" required rows="8" cols="80" style="resize : none;overflow : auto;">
            <?php if(isset($_POST['article'])) echo $_POST['article'];?>
          </textarea></p>
          <script type="text/javascript">
            function imgSelect(){
              document.getElementsByName('img')[0].style.display = 'block';
              document.getElementsByName('imgLink')[0].style.display = 'block';
            }
          </script>
          <p><input name="img" type="file" id="file" style="display: none;" class="w3-input w3-padding-16" /></p>
          <p><input type="text" name="imgLink" style="display: none;" class="w3-input w3-padding-16"></p>
          <input class="w3-button w3-light-grey" type="button" value="Charger une image" title="importe une image" onclick="imgSelect();" />
          <input class="w3-button w3-light-grey" type="submit" name="enregistrement" value="Enregistrer">
          <input class="w3-button w3-light-grey" type="reset" name="annuler" value="Annuler">
        </form>
      </div>


      <?php include 'footer.php' ?>
  </body>
</html>
