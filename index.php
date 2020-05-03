<!DOCTYPE html>
<html lang="en">

<head>
  <title>Formulaire QCM </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.0.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>

  <div class="container">
  <div  id="logo">
    <br/>
    <div class="row justify-content-center">
    <div class="col-sm-1">


        <img src = "img/itic.png">
</div>
<div class="col-sm-11">
<h1> Entrez vos questions & réponses </h1>
    </div>
</div>
    
  </head>
 
re
<?php
$titre2=$_GET['idqcm'];
echo $titre2;

if (isset($_GET["idqcm"])) {
    $titre = $_GET['idqcm'];
    echo "<div id='sujet' name='sujet'> <u>Titre QCM  :</u> ".$titre."</div>";
    
    /******************************************CONNEXION SQL avec PDO ***********************************************/
$con= new PDO('mysql:host=localhost;dbname=qcmTest', 'root', '') or die("erreur de connection");


$query= "INSERT INTO qcm (TITREQCM) values ('$titre')";
//recherche des données


if ($con->query($query) === TRUE) {
    echo "<div id='sujet'> <u>Titre QCM :</u> ".$titre."</div>";
  }

}
?>




  <body>
  	<script type="text/javascript" src="testcheck.js"></script> 
   
   
<div id="cadre">
      <h5>Cochez la bonne reponse</h5>

      <br />

    <div class="form-group shadow-textarea">
        <form name="monform"   action="recup.php" method="post">
        <div class="row mb-3">

      
          <label for="Question">Question :</label>
          <textarea class="form-control z-depth-1" name="question" id="question" rows="3" placeholder="Question"  required></textarea>


          <br />
          <small id="aideUserName" class="form-text">Veuillez selectionner la bonne reponse</small>

          <br />
          <div class="col">

          Réponse A :
          <textarea class="form-control z-depth-1" rows="1" name="rep1" id="rep1" placeholder="Reponse A" required></textarea>
          <label><input type="checkbox" name="boutona" value="rep1"></label>
          </div>

          <br />
          <br />



          Réponse B:
          <textarea class="form-control" rows="1" id="rep2" name="rep2" placeholder="Reponse B" required></textarea>
          <label><input type="checkbox" name="boutonb" value="rep2"></label>

          <br />
          <br />


          Réponse C :
          <textarea class="form-control" rows="1" id="rep3" name="rep3" placeholder="Reponse C" required></textarea>
          <label><input type="checkbox" name="boutonc" value="rep3"></label>

          <br />
          <br />


          Réponse D :
          <textarea class="form-control" rows="1" name="rep4" id="rep4" placeholder="Reponse D" required></textarea>
          <label><input type="checkbox" name="boutond" value="rep4"></label>


          <br />
          <br />
          <br />

          <input id="button"  href='recup.php?titreqcm=".<?php $titre?>"' type="submit" name='valider' value="Valider" onclick="testcheck()" />
          <input id="button" type="reset" name='Reset' value="Réinitialiser" />
          <br />
          <br />


      <?php
      $con = null;

      ?>    
</div>



      </div>
      </form>
</body>
</html>
