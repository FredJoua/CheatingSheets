<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Garage Parrot Header </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-orange bg-light shadow-sm fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <!-- Logo Image -->
                    <img src="img/logoParrot.png" width="125" alt="logo" class="d-inline-block align-middle mr-2">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Direction du personnel
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="employes.php">Employés</a></li>
                                <li><a class="dropdown-item" href="../../ToDo/formEmbaucheCreate.php">Formulaire d'embauche</a></li>
                                <li><a class="dropdown-item" href="../../ToDo/listingEmployes.php">Listing Employés</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../private/commentaireEnAttente.php">Commentaire à valider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Véhicules d'occasion</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="index.php">Se déconnecter</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="btn btn-danger" href="index.php">Se déconnecter</a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <?php
            /*if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2) {
                    echo "<p id='msgerror'>mail ou mot de passe incorrect(s)</p>";
                }
            }*/
            ?>


        </nav>
    </header>
