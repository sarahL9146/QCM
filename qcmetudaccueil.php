<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil QCM Etudiant </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
          <h4> Veuillez sélectionner un sujet  </h4>
        </div>
      </div>
      <div id="cadre">
      </div>
      <?php

      /******************************************CONNEXION SQL avec PDO ***********************************************/
      require_once('connect.php');

      $query = "SELECT * FROM qcm";
      $liste = $con->query($query);

      $data = $liste->fetchAll(PDO::FETCH_BOTH);

      /******************************************FIN SQL avec PDO ***********************************************/


      
      foreach ($data as $donnees) {

        echo "<div class='cadre col-md-4'>";
        echo "<div class='encart-description'>";
        echo "<div id='cadre2'>";

        echo "<br/>";
        echo "<p class='title'name='idqcm' id='idqcm'>" . $donnees['TITREQCM'] . "</p>";
        echo " &nbsp";
        echo "<center>";
        echo "<a class='button' href='qcmetud.php?idqcm1=".$donnees['IDQCM'] ."&titreqcm=" . $donnees['TITREQCM'] ."''>Faire le Questionnaire </a>";
        echo "</center>";

        echo "<br/>";
        echo "</div>";

        echo "<br/>";
        echo "</div>";
        echo "</div>";
      }


 
      $con = null;
      ?>
    </div>
</body>

</html>