<?	

//Je suppose que vous avez déjà les variables php renseignées. Que ce soit un renseignement statique ou de données provenant de la base de données. Nommez vos variables selon les noms contenus dans le fichier template.htm	

// Je capture et mémorise le contenu du fichier template.htm	

$titreqcm="test";
$dil="a";

$content=file_get_contents('template.htm'); // Attention au chemin d'accès au fichier template. ici, il est dans le même répertoire que export.php sinon donnez le chemin correct.	

//Maintenant, je remplace une à une les variables. Méthode fastidieuse mais "Cameroun est chaud, on va faire comment". Optimisera au fil de l'expérience	

 $content=str_replace('$titreqcm',$titreqcm,$content);
 $content=str_replace('$dil',$dil,$content);


// La suite du fichier à l'étape 3	

$filename="QCM.doc";
touch($filename);
if (is_writable($filename)) {
 if (!$handle = fopen($filename, 'a')) {
  echo "Impossible d'ouvrir le fichier ($filename)";
  exit;
 }
 if (fwrite($handle, $content) === FALSE) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
 }
 echo "<a href='$filename'>Télécharger le fichier</a>";
 fclose($handle);
} else {
 echo "Le fichier $filename n'est pas accessible en écriture.";
}
?>