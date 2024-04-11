<?php
include_once("../../dbconn.php");

$id_employe = "";
$nom = "";
$prenom = "";
$num_secu = "";
$email = "";
$type_contrat = "";
$salaire = "";
$date_embauche = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Method GET pour montrer les données de l'employé
    if (!isset($_GET["id_employe"])) {
        header("location:listingEmployes.php");
        exit;
    }

    $id = $_GET["id_employe"];
    // Read la ligne de l'employé sélectionné dans la bd
    $sql = "SELECT * FROM employes WHERE id_employe=$id";
    $query = $conn->query($sql);
    $row = $query->fetch(PDO::FETCH_ASSOC);


    if (!$row) {
        header("location:listingEmployes.php");
        exit;
    }

    $id_employe = $row['id_employe'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $num_secu = $row['num_secu'];
    $email = $row['email'];
    $type_contrat = $row['type_contrat'];
    $salaire = $row['salaire'];
    $date_embauche = $row['date_embauche'];
} else {
    // Method POST pour apporter des modifications
    $id_employe = $_POST["id_employe"];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $num_secu = $_POST['num_secu'];
    $email = $_POST['email'];
    $type_contrat = $_POST['type_contrat'];
    $salaire = $_POST['salaire'];
    $date_embauche = $_POST['date_embauche'];

    do {
        if (empty($nom) || empty($prenom) || empty($num_secu) || empty($email) || empty($type_contrat) || empty($salaire) || empty($date_embauche)) {
            $errorMessage = "ATTENTION ! Tous les champs doivent être remplis";
            break;
        }

        $sql = "UPDATE `employes` SET `nom`='$nom', `prenom`='$prenom', `num_secu`='$num_secu', `email`='$email', `type_contrat`='$type_contrat', `salaire`='$salaire', `date_embauche`='$date_embauche' WHERE `id_employe` = $id_employe";

        $query = $conn->query($sql);

        if (!$query) {
            $errorMessage = "Erreur dans la mise à jour: " . $conn->error;
            break;
        }

        $successMessage = "Données employé modifiée avec succès";
        header("location:listingEmployes.php");
        exit;

    } while (true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier employé</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-3">
                <div class="alert alert-warning text-center" role="alert">
                    <h4 class="alert-heading">Modifier Membre</h4>
                    <hr>
                </div>

                <?php
                // Message d'alerte pour les erreurs
                if (!empty($errorMessage)) {
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>' . $errorMessage . '</strong>
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"></button>
                    </div>
                    ';
                }
                ?>
                
                <form action="formUpdateEmployes.php" method="post">
                    <input type="hidden" name="id_employe" value="<?php echo $id_employe; ?>">
                    <div class="row">
                        <div class="col mb-3">
                            <input class="form-control" type="text" name="nom" placeholder="Nom de famille" value="<?php echo $nom; ?>" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="col mb-3">
                            <input class="form-control" type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom; ?>" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="num_secu" placeholder="N° de sécurité sociale" value="<?php echo $num_secu; ?>" >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="exemple@email.com" value="<?php echo $email; ?>" >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="type_contrat" placeholder="Type de Contrat"  value="<?php echo $type_contrat; ?>" oninput="this.value = this.value.toUpperCase()">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="salaire"  placeholder="Salaire" value="<?php echo $salaire; ?>" >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="date" name="date_embauche"  placeholder="Date d'embauche" value="<?php echo $date_embauche; ?>" >
                    </div>

                    <?php
                    // Message d'alerte pour le succès
                    if (!empty($successMessage)) {
                        echo '
                        <div class="row mb-3">
                            <div class="offset-sm-3 col-sm-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>' . $successMessage . '</strong>
                                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"></button>
                                </dir>
                        </div>
                    </div>
                    ';
                }
                ?>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="submit" class="btn btn-outline-success">Enregistrer</button>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="cancel" href="listingEmployes.php" class="btn btn-outline-danger">Annuler</button>
                        </div>
                    </div>
                </form>

                <div class="mt-3">
                    <!-- Lien de redirection vers la page d'accueil à tout moment -->
                    <a href="../../../index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
