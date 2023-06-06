<?php
// Etablir la connexion à la base de données
    $serveur="localhost";
    $utilisateur="root";
    $motdepass="";
    $db="labo";
    $connexion= mysqli_connect($serveur,$utilisateur,$motdepass,$db);

    //Vérifier si la connexion a été établie
    if(!$connexion)
    {
        die("Erreur: ".mysqli_connect_error());
    }
?>