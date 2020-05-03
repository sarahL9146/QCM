<!DOCTYPE html>
<html lang="en">

<head>
  <title>Formulaire QCM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">



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

    <div id="cadre">
      <h1> Entrez le nom du sujet</h1>


      <div class="form-group shadow-textarea">
        <form name="monform" action='index.php' method="get">

          <label for="idqcm">Titre du QCM :</label>
          <textarea class="form-control z-depth-1" name="idqcm" id="idqcm" rows="2" placeholder="Nom du Sujet"></textarea>


          <br />
          <br />

          <input class="button" type="submit" name='Submit' value="Valider" />
          <input class="button" type="reset" name='Reset' value="Réinitialiser" />

          <br />
          <br />

      </div>
      </form>
    </div>
  </div>




</body>

</html>