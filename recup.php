<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Document</title>

</head>

<script>

</script>


<body>
    <?php

if (isset($_GET["titreqcm"])) {
    $titre = $_GET['titreqcm'];
     echo "<b>Le Nom du QCM est : </b>" . $titre;
     echo "<br>";

    echo"<br>";
}

    // récupération de la question
    if (isset($_POST["question"])) {
        $question = $_POST['question'];
        echo "<b>Question : </b>" . $question;
        echo "<br>";
        echo "<br>";
    }

    // récupération des réponses

    if (isset($_POST["rep1"])) {
        $repa = $_POST['rep1'];
        echo "<b>Réponse A : </b>" . $repa;
        echo "<br>";
    }
    if (isset($_POST["rep2"])) {
        $repb = $_POST['rep2'];
        echo "<b>Réponse B : </b>" . $repb;
        echo "<br>";
    }
    if (isset($_POST["rep3"])) {
        $repc = $_POST['rep3'];
        echo "<b>Réponse C : </b>" . $repc;
        echo "<br>";
    }
    if (isset($_POST["rep4"])) {
        $repd = $_POST['rep4'];
        echo "<b>Réponse D : </b>" . $repd;
        echo "<br>";
        echo "<br>";
    }

    // élément de l'identification


    if (isset($_GET["idqcm1"])) {
        $id = $_GET['idqcm1'];
        //echo "ID = " . $id;
    }


    // flags

    if (isset($_POST['boutona'])) {
        $flag1 = 1;
        $flag2 = 0;
        $flag3 = 0;
        $flag4 = 0;
        $bonneR = $repa;
        echo ("<b> Bonne réponse : </b> " . $bonneR);
    }

    if (isset($_POST['boutonb'])) {
        $flag1 = 0;
        $flag2 = 1;
        $flag3 = 0;
        $flag4 = 0;
        $bonneR = $repb;
        echo ("<b>Bonne réponse : </b> " . $bonneR);
    }
    if (isset($_POST['boutonc'])) {
        $flag1 = 0;
        $flag2 = 0;
        $flag3 = 1;
        $flag4 = 0;
        $bonneR = $repc;
        echo ("<b>Bonne réponse : </b> " . $bonneR);
    }

    if (isset($_POST['boutond'])) {
        $flag1 = 0;
        $flag2 = 0;
        $flag3 = 0;
        $flag4 = 1;
        $bonneR = $repd;
        echo ("<b>Bonne réponse : </b> " . $bonneR);
    }

    ?>
<br>
<br>
<a href="accueil.php">Retour page accueil</a>


    <?php
    /******************************************CONNEXION SQL avec MYSQLi ***********************************************/

    require_once('connect.php');




    $sql = "INSERT INTO question (IDQCM,designation,textReponseA,textReponseB,textReponseC,textReponseD,flagReponseA,flagReponseB,flagReponseC,flagReponseD)
values ('$id','$question','$repa','$repb','$repc','$repd','$flag1','$flag2','$flag3','$flag4')";

    if ($con->query($sql) === TRUE) {
    }


    $con = null;
    ?>




</body>

</html>