<?php
session_start();
include "dbconn.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
        $email = htmlspecialchars($_POST['email']);
        $motdepasse = ($_POST['motdepasse']);

        $sql = $conn->prepare("SELECT * FROM employes WHERE email=? AND motdepasse=?");
        $sql->execute(array($email, $motdepasse));

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);

            // Vérifier si l'utilisateur est un administrateur (est_admin = 111)
            if ($row['est_admin'] == 111) {
                $_SESSION['email'] = $email;
                $_SESSION['motdepasse'] = $motdepasse;
                $_SESSION['id'] = $row['id'];
            
                header("location:adminBoss.php");
                exit(); 
            } else {
                // rediriger utilisateurs non administrateurs, 
                header("location:adminEmployes.php");
                exit(); 
            }
        } else {
            echo "Votre email ou mot de passe est incorrect";
        }
    }
}
// Fermez la connexion à la base de données
$conn = null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Admin - Se connecter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleFooter.css">
</head>

<body>
    
    <?php //include "../db/dbconnexion.php" ?>
    <?php include "headerLogout.php" ?>
    <header>

    </header>
    
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="img/loginEmployes.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="text py-3">Espace reservé à l'administration</h1>
                    <h class="text-warning">Veuillez remplir ce formulaire pour vous connecter</h>
                    <form method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="exemple@email.com" class="form-control my-3 p-3" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="motdepasse" placeholder="************" class="form-control my-3 p-3" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="btn btn-warning mb-3">Me connecter</button>
                            </div>
                        </div>
                        <a href="#">Mot de passe oublié</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
</body>
</html>
