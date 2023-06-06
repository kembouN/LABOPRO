
<?php
  require('../traitement/connexionlabo.php');
  $selectionservice="SELECT * FROM service";
  $exeselect=mysqli_query($connexion, $selectionservice);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../labopro_css/boostrap/css/bootstrap.min.css">
    <script src="../labopro_js/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../labopro_css/labopro.css">
</head>
<body>
    <div class="ensemble_service">
        <nav class="lateral">

            <div class="presentation">
                <img src="../images/logo_magnolia.png" alt="Logo">
              <span>BIENVENUE SUR <span id="nom_labo">Magnolia</span> </span>
              <span class="nom_utilisateur"></span>
            </div>
    
            <div class="nav_bar">
              <p class="bloc_lien">
                <a href="accueil.php"> 🏠Accueil</a>
              </p>
    
              <p class="bloc_lien">
                <a href="#">🧑‍💻Utilisateur</a>
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
                <input type="button" value="Aide"  class="aide" onclick="message_daide()" class="aide">
              </p>
    
              <p>
                <input type="button" value="Quitter " class="quitter" onclick="quitter()" class="quitter">
              </p>
    
            </div>
    
        </nav>

        <section class="contenu_service">
            <header>
                <p>Les différents services dont dispose le laboratoire sont mentionnés dans cette page. Vous pouvez aussi </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_enregidtrer">
                    + Ajouter un service 🔬
                </button>

                <!--modal-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Veuillez entrer les informations sur le service</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="../traitement/creationservice.php" method="post" class="formulaire_inscription">

                            <div class="champ">
                                <label for="#nomservice"> Nom</label>
                                <input type="text" name="nomservice" id="nomservice" class="form-control">
                            </div>

                            <div class="champ">
                                <label for="#commentaire"> Commentaire</label>
                                <input type="text" name="commentaire" id="commentaire" class="form-control">
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" name="creationservice">Créer</button>
                      </div>
                        </form>
                    </div>
                  </div>
                </div>
            </header>

            <div class="info_service">
                <table class="table table-striped table-sm">
                  <tr class="table">
                    <th>Nom du service</th>
                    <th>Commentaire</th>
                    <th>Actions</th>
                  </tr>

                  <?php while($solutionselect=mysqli_fetch_assoc($exeselect)){?>
                    <tr>
                      <td><?php echo $solutionselect['nom_service']; ?></td>
                      <td><?php echo $solutionselect['commentaire']; ?></td>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>