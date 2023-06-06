<?php 
    require('../traitement/connexionlabo.php');
    function verification($donnee)
    {
        $donnee=trim($donnee);
        $donnee=htmlspecialchars($donnee);
        $donnee=stripslashes($donnee);
        return $donnee;
    }

    if(isset($_POST['enregistrerpatient'])){
        $numeroid=verification($_REQUEST['identitepatient']);
        $nompatient=verification($_REQUEST['nompatient']);
        $prenompatient=verification($_REQUEST['prenompatient']);
        $sexepatient=verification($_REQUEST['sexepatient']);
        $contactpatient=verification($_REQUEST['contactpatient']);
        $adressepatient=verification($_REQUEST['adressepatient']);

        $commandepatient="INSERT INTO patient (numero_identite, nom_patient, prenom_patient, sexe, Contact_patient, Adresse_patient) 
                                VALUES ('$numeroid','$nompatient','$prenompatient','$sexepatient','$contactpatient','$adressepatient');";
        $execommandepatient=mysqli_query($connexion,$commandepatient);

        header('location:../interfaces/patient.php');
    }else{
        die("Tache non effectuée: " .$emssage=mysqli_connect_errno()) or die("Erreur: " .$message=mysqli_error($connexion));

    }

?>