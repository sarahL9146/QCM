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


    $question = $_POST["question"];
    $repa = $_POST["rep1"];
    $repb = $_POST["rep2"];
    $repc = $_POST["rep3"];
    $repd = $_POST["rep4"];
    $titre = $_GET["id"];

   

    $message = "La question est : " . $question .
        " <br>" .
        " <br> La réponse 1 est  :" . $repa .
        " <br> La réponse 2 est  :" . $repb .
        " <br> La réponse 3 est  :" . $repc .
        " <br> La réponse 4 est  :" . $repd .
        " <br> titre :" . $titre .
        " <br>";

    

    echo ($message);

    

    if (isset($_POST['boutona'])){
        $flag1 = 1;
        $flag2 = 0;
        $flag3 = 0;
        $flag4 = 0;
        $bonneR = $repa;
        echo ("La bonne réponse est :  " . $bonneR);
    }

    if (isset($_POST['boutonb'])){
        $flag1 = 0;
        $flag2 = 1;
        $flag3 = 0;
        $flag4 = 0;
        $bonneR = $repb;
        echo ("La bonne réponse est :  " . $bonneR);
    }
    if (isset($_POST['boutonc'])){
        $flag1 = 0;
        $flag2 = 0;
        $flag3 = 1;
        $flag4 = 0;
        $bonneR = $repc;
        echo ("La bonne réponse est :  " . $bonneR);
    }

    if (isset($_POST['boutond'])){
        $flag1 = 0;
        $flag2 = 0;
        $flag3 = 0;
        $flag4 = 1;
        $bonneR = $repd;
        echo ("La bonne réponse est :  " . $bonneR);
    }



    ?>



    <?php
    /******************************************CONNEXION SQL avec MYSQLi ***********************************************/

    try{
        $con= new PDO('mysql:host=localhost;dbname=qcmTest', 'root', '') or die("erreur de connection");
        }catch(PDOException $e){
        
          echo("Erreur".$e->getMessage());
        }

$sql= "INSERT INTO question (IDQCM,designation,textReponseA,textReponseB,textReponseC,textReponseD,flagReponseA,flagReponseB,flagReponseC,flagReponseD)
values (99,'$question','$repa','$repb','$repc','$repd','$flag1','$flag2','$flag3','$flag4')";



    
  $con=null;    
    ?>




</body>

</html>