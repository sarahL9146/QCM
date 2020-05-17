<!DOCTYPE html>
<html lang="en">

<head>
  <title>Formulaire QCM </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div id="logo">
      <br />
      <div class="row justify-content-center">
        <div class="col-sm-1">
          <img src="img/itic.png">
        </div>
        <div class="col-sm-11">
          <h1> Entrez vos questions & réponses </h1>
        </div>
      </div>
      </head>
      <?php

      /*********************** Quand ancien QCM  *******************************/

      if (isset($_GET["idqcm1"])) {
        $id = $_GET['idqcm1'];
        // echo $id;
      }

      if (isset($_GET["titreqcm"])) {
        $titre = $_GET['titreqcm'];
        echo "<div id='sujet' name='sujet'> <u>Titre QCM  :</u> " . $titre . "</div>";
      }
      /******************************************CONNEXION SQL avec PDO ***********************************************/
      require_once('connect.php');

      $query = "INSERT INTO qcm (TITREQCM) values ('$titre') WHERE TITREQCM NOT IN TITREQCM";


      //recherche des données

      if ($con->query($query) === TRUE) {
        echo "<div id='sujet'> <u>Titre QCM :</u> " . $titre . "</div>";
      }




      /****************************************** FIN SQL avec PDO ***********************************************/

      ?>

      <body>
        <script type="text/javascript" src="testcheck.js"></script>

        <div id="cadre">


          <div class="form-group shadow-textarea">
            <?php echo "<form name='monform' action='recup.php?idqcm1=$id&titreqcm=$titre' method='post'>"; ?>


            <div class="row mb-3">


              <textarea class="form-control z-depth-1" name="question" id="question" rows="3" placeholder="Question" required></textarea>


              <br />
              <small id="aideUserName" class="form-text">Veuillez selectionner la bonne reponse</small>

              <br />


              <label> Réponse A :</label>
              <textarea class="form-control z-depth-1" rows="1" name="rep1" id="rep1" placeholder="Reponse A" required></textarea>
              <label><input type="checkbox" name="boutona" value="rep1"></label>

              <br />
              <br />

              <label> Réponse B :</label>
              <textarea class="form-control" rows="1" id="rep2" name="rep2" placeholder="Reponse B" required></textarea>
              <label><input type="checkbox" name="boutonb" value="rep2"></label>

              <br />
              <br />

              <label> Réponse C :</label>
              <textarea class="form-control" rows="1" id="rep3" name="rep3" placeholder="Reponse C" required></textarea>
              <label><input type="checkbox" name="boutonc" value="rep3"></label>

              <br />
              <br />

              <label> Réponse D :</label>
              <textarea class="form-control" rows="1" name="rep4" id="rep4" placeholder="Reponse D" required></textarea>
              <label><input type="checkbox" name="boutond" value="rep4"></label>

              <br />


              <div id="bouton">
                <input id="button" type="submit" name='valider' value="Valider" />
                <input id="button" type="reset" name='Reset' value="Réinitialiser" />
              </div>

              <?php
              $con = null;

              ?>
            </div>

          </div>
          </form>
      </body>

</html>