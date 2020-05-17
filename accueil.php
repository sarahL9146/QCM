<!DOCTYPE html>
<html lang="en">

<head>
  <title>Accueil QCM </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-1">
        <br />
          <img src="img/itic.png">
        </div>
        <div class="col-sm-11">
        <br />
          <h1> Veuillez sélectionner un sujet ou en crée un nouveau </h1>
        </div>
      <div id="accueil">
      <br /><br /><br />
        <a href="nouveauform.php"> <button type="button" class="btn btn-secondary btn-lg">Créer un nouveau sujet</button></a>
        <br /><br /><br />

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
        echo "<a class='button' href='index.php?idqcm1=".$donnees['IDQCM'] ."&titreqcm=" . $donnees['TITREQCM'] ."'>Ajouter Question</a>";
        echo " &nbsp";
        echo "<a class='button' href='export.php?idqcm1=".$donnees['IDQCM'] ."&titreqcm=" . $donnees['TITREQCM'] ."'>Fichier Word Question </a>";
        echo " &nbsp";

        //echo "<a class='button' href='''>Fichier Excel</a>";
        echo "</center>";

        echo "<br/>";
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