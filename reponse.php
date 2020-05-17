<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

/************************ CONNEXION ***********************/
require_once('connect.php');

if (isset($_GET["idqcm1"])) {
    $id = $_GET['idqcm1'];
}
if (isset($_GET["titreqcm"])) {
    $titre = $_GET['titreqcm'];
}

$query = "SELECT * FROM question where IDQCM=" . $id;
$liste = $con->query($query);

$data = $liste->fetchAll(PDO::FETCH_BOTH);


?>

<body>

    <form action="http://api.pdflayer.com/api/convert?access_key=f183e983ad716c08a7eb1194ee80ae3b" method="POST">

        <textarea name="document_html" style="display:none;">

<table>
<tr>
<td> <b>Question n° </b> &nbsp;&nbsp;</td>
<td> <b>Reponse A </b>&nbsp;&nbsp;</td>
<td> <b>Reponse B </b>&nbsp;&nbsp;</td>
<td> <b>Reponse C </b>&nbsp;&nbsp;</td>
<td> <b>Reponse D </b> &nbsp;&nbsp;</td>
</tr>

   <?php

    foreach ($data as $donnees) {
        echo"<tr>";
        echo "<td>" . $donnees['ID'] . "&nbsp;&nbsp;</td>";
        echo "<td>" . $donnees['flagReponseA'] . "&nbsp;&nbsp;</td>";
        echo "<td>" . $donnees['flagReponseB'] . "&nbsp;&nbsp; </td>";
        echo "<td>" . $donnees['flagReponseC'] . "&nbsp;&nbsp;</td>";
        echo "<td>" . $donnees['flagReponseD'] . "&nbsp;&nbsp;</td>";
        echo "<br>";
        echo"</tr>";
       
    }
    echo "</table>";
    

    ?>
   </textarea>
        <br>
       <div id="rep"> 
<?php
       
        echo "<h2>".$titre."</h2>";
        echo "<br>";
        echo "<br>";
        
        ?>

        <input type="submit" value="Télécharger fichier PDF">
    </div>
    </form>
</body>

</html>