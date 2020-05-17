<?php
  /******************************************CONNEXION SQL avec MYSQLi ***********************************************/
  $id= $_GET['idqcm1'];
  require_once('connect.php');



      $sql = "SELECT * FROM question WHERE IDQCM='$id' ORDER BY IDQCM DESC";
if ($con->query($sql) === TRUE) {
}

if (isset($_POST["retour"])) // retour : on réaffiche la page corrigée
{
 echo "<br><center>CORRIGE<br>(Allez consulter votre <a href=\"#sco\">score</a> au bas de cette page)</center><br>";
}

$liste=$con->query($sql);
$data= $liste->fetchAll(PDO::FETCH_BOTH);

  ?>
<html>
<head>

<title>QCM</title>
<!-- Pour empecher le retour en arriere avec le bouton BACK -->
<script type="text/javascript">
function noBack(){window.history.forward()}
  noBack();
  window.onload=noBack;
  window.onpageshow=function(evt){if(evt.persisted)noBack()}
  window.onunload=function(){void(0)}
</script> 
</head>
<body>
<center><table border="1" cellpadding="5" bgcolor="#bc8583"><tr><td><?php echo  $_GET['titreqcm']?></td></tr></table></center><br>
<!-- le formulaire s'appelle lui-m�me -->
<form method="post" action="qcmetud.php">  
<?php 

foreach ($data as $donnees) {
  $question=$donnees['designation'];
  $nbchoix=$donnees['ID'];
  $rep1=$donnees['textReponseA'];
  $rep2=$donnees['textReponseB'];
  $rep3=$donnees['textReponseC'];
  $rep4=$donnees['textReponseD'];
  $flag1 = $donnees['flagReponseA'];
  $flag2 = $donnees['flagReponseB'];
  $flag3 = $donnees['flagReponseC'];
  $flag4 = $donnees['flagReponseD'];
  echo $flag1;
  echo $flag2;
  echo $flag3;
  echo $flag4;


  $score=0;

  echo "<table border=\"1\" width=\"100%\" bgcolor=\"#BC8F8F\">";
  echo "<tr>";
  echo "<td colspan=\"$nbchoix\">";
  echo "<center><h3><font color=\"#FF0000\">$nbchoix </font></h3></center>";
  echo "<center>$question</center>";
  echo "<br/>";
  echo "</td>";
  echo "</tr>";

   echo "<tr>";
   echo "<td align=\"left\" bgcolor=\"#F5DEB3\">";
   echo "<br/>";
   echo "<input type=\"checkbox\" name=\"flaga\" value=\"flaga\" ";
   echo "<p>$rep1</p>";
   echo "<input type=\"checkbox\" name=\"flagb\" value=\"flagb\" ";
   echo "<p>$rep2</p>";
   echo "<input type=\"checkbox\" name=\"flagc\" value=\"flagc\" ";
   echo "<p>$rep3</p>";
   echo "<input type=\"checkbox\" name=\"flagd\" value=\"flagd\" ";
   echo "<p>$rep4</p>";
   
   echo "</td>";
   echo "</tr>";
   echo "<br/>";
   echo "</table>";
 }

 echo "<input type=\"hidden\" name=\"retour\" value=\"1\">";
 echo "<br><br><center><input type=\"submit\" value=\"Confirmer\"></center>";

$con=null;

?>
</form>
</body>
</html>
