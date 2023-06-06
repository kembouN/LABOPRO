<?php 
    session_start();
    require('../traitement/connexionlabo.php');
    
    $rendService ="SELECT * FROM service;";
    $res = mysqli_query($connexion,$rendService);
?>

<?php 
    $rendEmploye="SELECT * FROM employe;";
    $excuteRendEmploye=mysqli_query($connexion,$rendEmploye);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employés</title>
    <link rel="stylesheet" href="labopro_css/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../labopro_css/labopro.css">
</head>
<body>
    <div class="ensemble_employe">
        <nav class="lateral">

            <div class="presentation">
                <img src="../images/logo_magnolia.png" alt="Logo">
              <span>BIENVENUE SUR <span id="nom_labo">Magnolia</span> </span>
              <span class="nom_utilisateur"></span>
            </div>
    
            <div class="nav_bar">
              <p class="bloc_lien">
                <a href="accueil.php"> 🏠 Accueil</a>
              </p>
    
              <p class="bloc_lien">
                <a href="#">🧑‍💻 Utilisateur</a>
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
                <input type="button" value="Aide "  class="aide" onclick="message_daide()" class="aide">
              </p>
    
              <p>
                <input type="button" value="Quitter" class="quitter" onclick="quitter()" class="quitter">
              </p>
    
            </div>
    
        </nav>

        <section class="contenu_employe">
            <header>
                <p>Liste des employés enregistrés. Vous pouvez modifier les informations sur ces derniers.</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_ajouteremploye">
                    + Enregistrer un nouvel employé🧑‍⚕️
                </button>
                    
                <!--modal-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Veuillez entrer les informations sur l'employé.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="">Remplissez les champs ci-dessous</p>

                        <form action="traitement/creationemploye.php" method="post" class="formulaire_inscription">
                            <div class="champ">
                                <label for="#matricule"> Matricule</label>
                                <input type="number" name="matriculeemploye" id="matricule" class="form-control">
                                <span class="erreur"></span>
                            </div>

                            <div class="champ">
                                <label for="#nomemploye"> Nom</label>
                                <input type="text" name="nomemploye" id="nomemploye" class="form-control">
                                <span class="erreur"></span>
                            </div>

                            <div class="champ">
                                <label for="#prenomemploye">Prénom</label>
                                <input type="text" name="prenomemploye" id="prenomemploye" class="form-control">
                            </div>

                            <div class="champ">
                                <label for="#dateembauche"> Date d'embauche</label>
                                <input type="date" name="dateembauche" id="dateembauche" class="form-control">
                                <span class="erreur"></span>
                            </div>

                            <div class="champ">
                                <label for="#contactemploye">Contact</label>
                                <input type="number" name="contactemploye" id="contactemploye" class="form-control">
                                <span class="erreur"></span>
                            </div>

                            <div class="champ">
                                <label for="#poste">Poste</label>
                                <input type="text" name="posteemploye" id="poste" class="form-control">
                            </div>

                            <div class="champ">
                                <label for="#serviceaffecte">Service affecté</label>
                                <select name="serviceemploye" id="serviceemploye" class="form-select">
                                    <option value="">Choisir...</option>
                                    <?php 
                                    while($sr = mysqli_fetch_assoc($res)){?>
                                    <option type='number' value=<?php echo $sr['id_service']?>><?php echo $sr['nom_service']?></option>
                                   <?php 
                                    } 
                                    ?>  
                                </select>
                            </div>

                            <div class="champ">
                                <label for="#adresseemploye">Adresse de l'employé</label>
                                <input type="text" name="adresseemploye" id="adresseemploye" class="form-control">
                            </div>

                            <div class="champ">
                                <label for="#mtpasse">Mot de passe</label>
                                <input type="password" name="passemploye" id="mtpasse" class="form-control">
                            </div>
                            
                             
                    </div>
                    <div class="modal-footer">
                        <div class="bouton">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="enregistreremploye">Enregistrer</button>
                        </div>
                    </div>
                        </form>
                </div>
                </div>
                </div>
            </header>

            <div class="info_employe">
                <table class="table table-striped table-sm">
                    <tr class="table">
                        <th>Matricule</th>
                        <th>Nom de l'employé</th>
                        <th>Date de modification</th>
                        <th>Actions</th>
                    </tr>
                    
                    <?php while($solution=mysqli_fetch_assoc($excuteRendEmploye)){
                        ?>
                        <tr class="gris">
                            <td><?php echo $solution['matricule_employe'];?></td>
                            <td><?php echo $solution['nom'];?></td>
                            <td><?php echo $solution['date_embauche']; ?></td>
                            <td>
                                <button class="btn btn-danger"> ✖️ Supprimer</button>
                                <button class="btn btn-info">🖊️Modifier</button>
                            </td>
                        </tr>
                        <?php } ?>

                </table>
            </div>
        </section>
    </div>
    <script src="labopro_css/boostrap/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>