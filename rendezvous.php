<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link rel="stylesheet" href="../labopro_css/boostrap/css/bootstrap.min.css">
    <script src="../labopro_js/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../labopro_css/labopro.css">
</head>
<body>
    <div class="ensemble_rdv">
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
                    <a href="" class=""> 🧑‍💻Utilisateur</a>
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

        <section class="contenu_rdv">
            <header>
                <p>Si un patient a pris un rendez-vous, vous ne le manquerez pas ici. Vous pouvez aussi ajouter un</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_enregidtrer">
                    + Nouveau rendez-vous🗒️
                </button>

                <!--modal-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Remplissez les différents champs.</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../traitement/instaurerrdv.php" method="post" class="formulaire_inscription">

                                    <div class="champ">
                                        <label for="#numid"> Numéro d'identité</label>
                                        <input type="number" name="numero_identite" id="numid" class="form-control">
                                    </div>

                                    <div class="champ">
                                        <label for="#nom"> Nom</label>
                                        <input type="text" name="nombre employe" id="nom" class="form-control">
                                    </div>

                                    <div class="champ">
                                        <label for="#date_etb"> Date d'établissement</label>
                                        <input type="datetime" name="date d'etablissement" id="date_etb" class="form-control">
                                    </div>

                                    <div class="champ">
                                        <label for="#date_rdv"> Date du rendez-vous</label>
                                        <input type="datetime" name="date rdv" id="date_rdv" class="form-control">
                                    </div>

                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary">Créer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <div class="info_rdv">
                <table>
                    <tr class="table">
                        <th>Numéro d'identité</th>
                        <th>Nom</th>
                        <th>Date d'établissement</th>
                        <th>date du rendez-vous</th>
                        <th>Actions</th>
                    </tr>

                    <tr class="gris">
                        <td>4389185</td>
                        <td><a href="#">Rigo</a></td>
                        <td>12/04/2019</td>
                        <td>20/04/2019</td>
                        <td>
                            <button class="btn btn-danger"> ✖️ Supprimer</button>
                            <button class="btn btn-info">🖊️Modifier</button>
                        </td>
                    </tr>

                    <tr>
                        <td>448201</td>
                        <td><a href="#">Stark</a></td>
                        <td>20/12/2020</td>
                        <td>05/01/2021</td>
                        <td>
                            <button class="btn btn-danger"> ✖️ Supprimer</button>
                            <button class="btn btn-info">🖊️Modifier</button>
                        </td>
                    </tr>

                    <tr class="gris">
                        <td>765890</td>
                        <td><a href="#">Evans</a></td>
                        <td>22/12/2020</td>
                        <td>05/03/2021</td>
                        <td>
                            <button class="btn btn-danger"> ✖️ Supprimer</button>
                            <button class="btn btn-info">🖊️Modifier</button>
                        </td>
                    </tr>

                </table>
            </div>
        </section>
    </div>
</body>
</html>