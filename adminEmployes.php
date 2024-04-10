<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">

    <title>Espace Pro</title>
</head>
<?php include_once "headerLogout.php"; ?>

<body>
    <h1>Garage Parrot - Espace admin </h1>
    <div class="container-fluid mt-5">
        <!-- Première rangée -->
        <div class="row">

            <!-- colonne 1 -->
            <div class="col-md-4">
                <div class="custom-container">
                    <div class="center-content">
                        <h3 class="card-title">Clients</h3><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDO/listingClients.php" value="Listing des clients"><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDO/commentaireClients.php" value="Commentaires en attente de validation"><br>
                    </div>
                </div>
            </div>

        <div class="row separator"></div>
        <!-- Deuxième rangée  -->
        <div class="row">
            <div class="col-md-4">
                <div class="custom-container">
                    <div class="center-content">
                        <h3 class="card-title">Validation des commentaires des clients</h3><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDo/listingCommentaires.php" value="Listing des commentaires"><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDo/formEmbauche.php" value="Formulaire d'embauche"><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDo/listingEmployes.php" value="listing des employés">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-container">
                    <div class="center-content">
                        <h3 class="card-title">Véhicules d'occasion</h3><br>
                        <input type="button" class="btn btn-outline-warning" href="../toDo/ajoutNewVO.php" value="Ajouter un VO"><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDo/listStockVO.php" value="Liste des VO en stock"><br>
                        <input type="button" class="btn btn-outline-warning" href="../ToDo/listVOvendus.php" value="Liste des VO vendus">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-container">
                    <div class="center-content">
                        <h3 class="card-title">Option si le temps: gestion atelier/rdv</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once "footer.php" ?>

</html>
