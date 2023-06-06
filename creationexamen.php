<?php 
    require('connexionlabo.php');

    function verification($donnee)
    {
        $donnee=trim($donnee);
        $donnee=htmlspecialchars($donnee);
        $donnee=stripslashes($donnee);
        return $donnee;
    }

    if(isset($_POST['enregistrer'])){
        $libelleexam=verification($_REQUEST['libelleexamen']);
        $montantexam=verification($_REQUEST['montantexamen']);
        $typeexam=verification($_REQUEST['typeexamen']);

        $commandeexamen="INSERT INTO examen (libelle,type_examen,montant)
                                        VALUES ('$libelleexam', '$typeexam', '$montantexam');";
        $execcommandeexamen=mysqli_query($connexion,$commandeexamen);
        header('Location: examen.php');
    }else{
        die("La tache n'a pas pu être effectuée: " .$message=mysqli_error($connexion));
    }

?>