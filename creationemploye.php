<?php
    require('connexionlabo.php');
    function verification($donnee)
    {
        $donnee=trim($donnee);
        $donnee=htmlspecialchars($donnee);
        $donnee=stripslashes($donnee);
        return $donnee;
    }
    
    if(isset($_POST['enregistreremploye'])){
        if(empty($matriculeemp)){$materreur="Entrer un matricule";}
        if(empty($_REQUEST['nomemploye'])){$nomerreur="Entrer un nom";}
        if(empty($_REQUEST['dateembauche'])){$dateerreur="Entrer la date d'embauche";}
        if(empty($_REQUEST['contactemploye'])){$contacterreur="Entrer le contact.";}
        if(empty($_REQUEST['serviceemploye'])){$serviceerreur="Entrer le service";}
        $prenomemp=verification($_REQUEST['prenomemploye']);
        $serviceemp=verification($_REQUEST['serviceemploye']);
        $adresseemp=verification($_REQUEST['adresseemploye']);
        $posteemp=verification($_REQUEST['posteemploye']);
        $passemp=verification($_REQUEST['passemploye']);
        $embauche=verification($_REQUEST['dateembauche']);
        $matriculeem=verification($_REQUEST['matriculeemploye']);
        $nomemp=verification($_REQUEST['nomemploye']);
        $contactemp=verification($_REQUEST['contactemploye']);


        $commande=("INSERT INTO employe (id_service, matricule_employe, nom, prenom, date_embauche, poste, motdepasse, adresse, contact)
                     VALUES ('$serviceemp','$matriculeem','$nomemp','$prenomemp','$embauche','$posteemp','$passemp','$adresseemp','$contactemp')");                                
        $solution=mysqli_query($connexion, $commande);
           header('location:employe.php');
    }else{
        die("Impossible d'effectuer la tâche:" .$message=mysqli_error($connexion));
    }
       
    
?>