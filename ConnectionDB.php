<?php
session_start();
include('script.php');
$select_db = mysqli_select_db($connect,"etudiant");

if ($select_db==false) {
die('Echec de selection');
}else
{
    printf('<p>Selection reussit</p>');
}
$query="INSERT INTO etudiants(Numero,Nom,Prenom,Filiere,DateNaissance,Email,Sexe,Serie) VALUES ('','SAWADOGO','Moussa','RIT','1922-02-02','sdramane413@gmail.com','M','A');";
//selection des donnees de la table etudiants
$query1="SELECT *FROM etudiants;";
//execution des requetes
$reponse1=mysqli_query($connect,$query1);
$reponse=mysqli_query($connect,$query);

printf('Ajouter avec succees');
?>