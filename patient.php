
<?php
     require('../traitement/connexionlabo.php');
    $rendpatient="SELECT * FROM patient";
    $exeRendpatient=mysqli_query($connexion, $rendpatient);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../labopro_css/boostrap/css/bootstrap.min.css">
    <script src="../labopro_js/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../labopro_css/labopro.css">
    <title>Patient</title>
</head>
<body>
    <div class="ensemble_patient">
        <nav class="lateral">

            <div class="presentation">
                <img src="../images/logo_magnolia.png" alt="Logo"><br>
              <span>BIENVENUE SUR <span id="nom_labo">Magnolia</span> </span>
              <span class="nom_utilisateur"></span>
            </div>

            <div class="nav_bar">
                <p class="bloc_lien">
                    <a href="accueil.php"> 🏠Accueil</a>
                </p>

                <p class="bloc_lien">
                    <a href="#" > 🧑‍💻Utilisateur</a>
                </p>

                <p class="bloc_lien">
                    <a href="patient.php">🤒Patient</a>
                </p>

                <p class="bloc_lien">
                    <a href="employe.php">🧑‍⚕️Employé</a>
                </p>
                
                <p class="bloc_lien">
                    <a href="services.php">🔬Service</a>
                </p>

                <p class="bloc_lien">
                    <a href="examen.php"> 🧪Examen</a>
                </p>

                <p class="bloc_lien">
                    <a href="rendezvous.php"> 🗒️Rendez-vous</a>
                </p>

                <p>
                    <input type="button" value="Aide "  class="aide" onclick="close()" class="aide">
                </p>

                <p>
                    <input type="button" value="Quitter" class="quitter" onclick="quitter()" class="quitter">
                </p>

            </div>
        </nav>

        <div class="info_patient">
            <section>
                <header>
                    <p>Liste des patients enregistrés. Vous pouvez modifier les informations sur ces derniers.</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_enregidtrer">
                        + Enregistrer un nouveau patient🤒
                    </button>
  
                    <!--modal-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Veuillez entrer les informations du patient</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="">Veuillez entrer les informations du patient</p>
                            <form action="../traitement/traitementpatient.php" method="post" class="formulaire_inscription">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 champ">
                                            <label for="#numid"> Numéro d'identité</label><br>
                                            <input type="number" name="identitepatient" id="numid" class="form-control">
                                        </div>
        
                                        <div class="col-12 champ">
                                            <label for="#nompatient"> Nom</label><br>
                                            <input type="text" name="nompatient" id="nompatient" class="form-control">
                                        </div>
        
                                        <div class=" cool-12 champ">
                                            <label for="#prenompatient"> Prénom</label><br>
                                            <input type="text" name="prenompatient" id="prenompatient" class="form-control">
                                        </div>
        
                                        <div class=" col-12 champ">
                                            <label for="#sexepatient"> sexe</label><br>
                                            <input type="text" name=" sexepatient" id="sexepatient" class="form-control">
                                        </div>
        
                                        <div class=" col-12 champ">
                                            <label for="#contactpatient"> Contact</label><br>
                                            <input type="number" name="contactpatient" id="contactpatient" class="form-control">
                                        </div>
        
                                        <div class=" col-12 champ">
                                            <label for="#adressepatient">Adresse du patient</label><br>
                                            <input type="text" name="adressepatient" id="adressepatient" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="enregistrerpatient" id="enregistrerpatient">Enregistrer</button>
                        </div>
                        </form>
                    </div>
                    </div>
                    </div>
                </header>

                <div class="contenu_patient">
                    <table class="table table-striped table-sm">
                        <tr class="table">
                            <th>Numéro patient</th>
                            <th>Nom du patient</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>

                        <?php
                            while($sol=mysqli_fetch_assoc($exeRendpatient)){?>
                            <tr>
                                <td><?php echo $sol['numero_identite'];?></td>
                                <td><?php echo $sol['nom_patient']; ?></td>
                                <td><?php echo $sol['Contact_patient'];?></td>
                                <td>
                                    <button class="btn btn-danger" name="delpatient"> ✖️ Supprimer</button>
                                    <button class="btn btn-info">🖊️Modifier</button>
                                </td>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </section>
        </div>

    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>