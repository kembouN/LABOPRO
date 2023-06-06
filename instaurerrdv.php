<?php
    require('connexionlabo.php');
    function verification($donnee)
    {
        $donnee=trim($donnee);
        $donnee=htmlspecialchars($donnee);
        $donnee=stripslashes($donnee);
        return $donnee;
    }

    if(isset($_POST['']))
?>