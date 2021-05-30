<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Design.css">
  <title>Document</title>
</head>
<body>
  
<?php

echo "<center><p><h1>Merci por votre confiance, IST POUR L'EXELLENCE</h1></p></center>";

$name=  $_POST["Nom"];
$prenom= $_POST["Prenom"];
$numero=$_POST["Numero"];
$date=$_POST["date"];
$filiere = $_POST["filieres"];

if (isset($_POST["Nom"]) AND isset($_POST["Prenom"])   AND isset($_POST["Numero"]) AND isset($_POST["date"]))
{
$numero = (int)$_POST["Numero"];

if ($numero < 2100)
{

$fich=fopen('ListeEtudiant.txt','a+');
if (!fwrite($fich, 'Nom: '.$name. PHP_EOL .'Prenom :' . $prenom. PHP_EOL .'numero :' . $numero. PHP_EOL. 'date :' . $date . PHP_EOL. 'filieres :' .$filiere )) {

die("impossible d'ecrire dans le fichier 'listeEtudiant.txt'");
}
fclose($fich);


echo "<center><p >Parametres bien enregistré</p></center>";


}

}

?>
<?php
echo "<center><a href=\"formulaire.php\">Revenevez à la page formulaire</a></center>"; ?>
</body>
</html>