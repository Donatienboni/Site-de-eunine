<?php

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.6.5, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.5, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section data-bs-version="5.1" class="form7 cid-tnJ54lhMtg" id="form7-1">


        <div class="container">
           
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Inscription</strong>
                </h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
                    Formulaire d'Inscription
                </h4>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    
            <?php
            $connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
            if(isset($_POST['enregistrer'])){
                $verif = $connect->prepare("SELECT confirme_mdp,mdp FROM connexionadmin where  confirme_mdp=? AND mdp=?"); //partie base de donnee
                $verif->execute(array($_POST['confirme_password'], $_POST['password'])); //partie formulaire
                $trouve = $verif->rowcount();
                if ($trouve == 0) {
                   
                    $_SESSION['message'] = " Votre Mot de passe ou Email incorrect";
                }elseif ($trouve >0){
                   
                    $_SESSION['message'] = " utilisateur n'existe pas ";
                }else {
                    if (!isset ($_POST['confirme_mdp'] ) != !isset ($_POST['mdp'])) {
                        $_SESSION['message'] = " Votre Mot de passe est correct ";
                        header('location:inscription.php');
            
                    } elseif (isset ($_POST['confirme_mdp'] ) == isset ($_POST['mdp'])) {
                        $_SESSION['message'] = " Votre saission vides";
                        // $connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
                        $insert = $connect->prepare("INSERT INTO connexionadmin (email,mdp,nom,telephone,confirme_mdp) VALUES(?,?,?,?,?)");
                        $insert->execute(array($_POST['email'], $_POST['password'], $_POST['name'], $_POST['phone'], $_POST['confirme_password']));
            
                        header('location:index.php');
            
                    }
                }
            }
                                         
            ?>
                    <form  method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <!-- <form action="traitement-inscription.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"> -->
                                               <?php include('message-de-validation.php'); ?>
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Nom" data-form-field="name" class="form-control" value="" id="name-form7-1">
                            </div>
                            <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                                <input type="tel" name="phone" placeholder="Télephone" data-form-field="phone" class="form-control" value="" id="phone-form7-1">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form7-1">
                            </div>
                            <div data-for="passeword" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                                <input type="passeword" name="password" placeholder="Entrer Mot de passe" data-form-field="passeword" class="form-control" value="" id="phone-form7-1">
                            </div>
                          
                            <div class="col-auto mbr-section-btn align-center">
                                <button type="submit" class="btn btn-primary display-4" name="enregistrer"> Valider Inscription</button>
                            </div> 
                            <!-- <div class="col-auto mbr-section-btn align-center">
                            <a href="index.php" class="btn btn-primary display-4" > retour</a>
                            </div> -->
                            <div class="col-auto mbr-section-btn align-center">
                             
                             <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                             <h6 >Creer votre compte si vous en avez pas ! <strong><a href="index.php">retour</a> </strong> </h6>    
                             </p>

                         </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>