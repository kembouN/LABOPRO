<?php 
    require('connexionlabo.php');
    function verification($donnee)
    {
        $donnee=trim($donnee);
        $donnee=htmlspecialchars($donnee);
        $donnee=stripslashes($donnee);
        return $donnee;
    }

    if(isset($_POST['creationservice'])){
        $nomservice=verification($_REQUEST['nomservice']);
        $commentaire=verification($_REQUEST['commentaire']);

        $commandeservice="INSERT INTO service (nom_service, commentaire ) VALUES ('$nomservice','$commentaire');";
        $execommandeservice=mysqli_query($connexion,$commandeservice);

        header("location:services.php");
    }else{
        echo "La tache n'est pas effectuer: " .$message= mysqli_error($connexion);
    }
?>