<?php
    require("connexionlabo.php");


    

    if(isset($_POST['valider'])){
        $nom = stripslashes($_REQUEST['nomutilisateur']);
        $nom = mysqli_real_escape_string($connexion,$nom);
        $motdepasse = stripslashes($_REQUEST['pass']);
        $motdepasse = mysqli_real_escape_string($connexion, $motdepasse);
        $requete = "SELECT * FROM employe WHERE nom ='$nom' and motdepasse = '$motdepasse';";
        $resultat = mysqli_query($connexion,$requete) or die(mysqli_error($connexion));
        $ligne = mysqli_num_rows($resultat);

        if($ligne == 1)
        {
            header('Location:../interfaces/accueil.php');
        }else{
             header('location:../interfaces/index.php');
        }
    }
?> 