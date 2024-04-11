<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer employés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-3">
                <div class="alert alert-warning text-center" role="alert">
                    <h4 class="alert-heading">Créer nouveaux Membre</h4>

                    <p></p>
                    <hr>
                </div>
                <!-- Message d'alerte pour le succès -->
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>CONFIRMATION !</strong> L'enregistrement a été effectué avec succès.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>ATTENTION !</strong> Erreur d'enregistrement.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="formInsertNewEmployes.php" method="post">
                    <div class="row">
                        <div class="col mb-3">
                            <input class="form-control" type="text" name="nom" placeholder="Nom de famille" required oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="col mb-3">
                            <input class="form-control" type="text" name="prenom" placeholder="Prénom" required >
                        </div>
                    <div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="num_secu" placeholder="N° de sécurité sociale" required >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="exemple@email.com" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="type_contrat" placeholder="Type de Contrat"  required oninput="this.value = this.value.toUpperCase()">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="salaire"  placeholder="Salaire" requied >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="date" name="date_embauche"  placeholder="Date d'embauche" required>
                    </div>
                    <div class="mb-3 form-check">
                        <!-- Champ caché avec valeur par défaut -->
                        <input type="hidden" name="est_admin" value="0"> 
                        <input type="checkbox" class="form-check-input" name="est_admin" value="111">
                        <label class="form-check-label" for="est_admin">Est Manager</label>
                    </div>

                    <hr class="mb-3">
                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="submit" class="btn btn-outline-success">Enregistrer</button>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="listingEmployes.php" class="btn btn-outline-danger">Annuler</a>
                        </div>
                    </div>
                </form>

                <div class="mt-3">
                    <!-- Lien de redirection après succès -->
                    <a href="../../index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
