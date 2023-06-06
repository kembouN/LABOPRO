<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../labopro_css/boostrap/css/bootstrap.min.css">
    <script src="../labopro_js/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../labopro_css/labopro.css">
    <title>Accueil</title>
</head>
<body>
    <div class="container-fluid">
        <div class="lien_entete">
             <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#aide" id="btn_aide">
                Aide ?
            </button>

            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#apropos" id="btn_propos">
                A propos !
            </button>

            <!--modal-->
            <div class="modal fade" id="apropos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="aide" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <p class="msg_bienvenue"> <img src="../images/logo_magnolia.png" alt="Logo"> Bienvenue sur <span>Magnolia</span> </p>
            <a href="#" class="user"><img src="../images/utilisateurcouleur.png" alt="Utilisateur"></a>
            <div class="rdv"><a href="rendezvous.php">Rendez-vous</a></div>
        </div>

        <div class="presentation_accueil">
            <div class="chemin">
               <div class="arriereplan">
                    <a href="employe.php">
                        <p class="descarte">Consulter la liste des employés enregistrés, ou en enregistrer de nouveaux</p>
                    </a>
               </div>
    
                <div class="arriereplan">
                    <a href="patient.php">
                        <p class="descarte">Consulter la liste des patients enregistrés, ou en enregistrer de nouveaux</p>
                    </a>
                </div>
            </div>

            <div class="description">
                <p>
                  <span>Le Magnolia</span> est un laboratoire qui offre différents services d'examens médicaux à ses patients.
                  Cette application de même nom vous aidera dans l'exercice de vos fonctions habituelles en mettant 
                  à votre disposition des fonctionnalités numériques et agréables😉.
                </p>
            </div>

            <div class="chemin">
                <div class="arriereplan">
                    <a href="services.php">
                        <p class="descarte">Consulter les différents services de Magnolia enregistrés, ou en Créer de nouveaux</p>
                    </a>
                </div>
    
                <div class="arriereplan">
                    <a href="examen.php">
                        <p class="descarte">Consulter la liste des examens disponibles, ou en établir de nouveaux</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>