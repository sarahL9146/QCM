<?php
try {
  $con = new PDO('mysql:host=localhost;dbname=qcmtest', 'root', '') ;
  $con->exec('SET NAMES utf8');
;
} catch (PDOException $e) {

  echo ("Erreur" . $e->getMessage());

}


/******************************************FIN SQL avec PDO ***********************************************/

?>