<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accueil QCM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
        <h1> Veuillez sélectionner un sujet ou en crée un nouveau </h1>
    </div>
</div>
        <div id="cadre">
       <!-- <h1> Veuillez sélectionner un sujet ou en crée un nouveau </h1>-->
        
       <a href="nouveauform.php"> <button type="button" class="btn btn-secondary btn-lg" >Créer un nouveau sujet</button></a>
       <br/><br/><br/>

</div>
<?php
/******************************************CONNEXION SQL avec PDO ***********************************************/
try{
$con= new PDO('mysql:host=localhost;dbname=qcmTest', 'root', '') or die("erreur de connection");
}catch(PDOException $e){

  echo("Erreur".$e->getMessage());
}


$query= "SELECT * FROM qcm";
$liste=$con->query($query);

 $data= $liste->fetchAll(PDO::FETCH_BOTH);
 /*echo '<pre>';
var_dump( $data);
echo '</pre>';
*/
 foreach ($data as $donnees) {

    echo "<div class='cadre col-md-4'>";
    echo "<div class='encart-description'>";
    echo "<div id='cadre2'>";

    	echo "<br/>";
	echo "<p class='title'name='idqcm' id='idqcm'>".$donnees['TITREQCM']."</p>";
	echo " &nbsp";
	echo "<center>";
    echo "<a class='button' href='index.php?titreqcm=".$donnees['TITREQCM']."''>Ajouter Question</a>";
    echo " &nbsp";

    echo "<a class='button' href='''>Fichier Word</a>";
    echo " &nbsp";

    echo "<a class='button' href='''>Fichier Excel</a>";
    echo "</center>";

    echo "<br/>";
    echo "<br/>";
    echo "</div>";
echo "<br/>";
echo "</div>";
echo "</div>";
 }
  $con=null;
?>
</div>
</body>
</html>