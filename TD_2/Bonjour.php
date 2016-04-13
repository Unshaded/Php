<?php
extract($_GET);
$nom = strtolower($nom);
$nom = ucfirst ($nom);
$prenom = strtolower($prenom);
$prenom = ucfirst ($prenom);
if($gender=='male')
  echo'Bonjour Monsieur ';
else
  echo'Bonjour Madame ';
echo $nom;
echo ' ';
echo $prenom;
?>