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

    <section data-bs-version="5.1" class="form6 cid-tn9tiMxjfE" id="form6-0">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Connexion admin</strong>
                </h3>
            </div>

            <div class="row justify-content-center mt-4">

                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    
                    <form action="traitementadmin.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">

                        <?php include('message-de-validation.php'); ?>
                        <!-- <img src="admin-one/dist/logo.png" alt="mon logo">    -->
                        <input type="hidden" name="email" data-form-email="true" value="GlRXnfCt0kQl3UzVMJ1f5AYwVYiku2i5F3Gw+UZHYKwOvVHdhT/UfOY8pYWmrM0h2MHTpwwAU6PDGtU4EnRgl4jX53m678Q22PkXE0qekP0DW3cB49l374y9dB9X880u">
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                                <input type="email" name="email" placeholder="Email" data-form-field="name" class="form-control" value="" id="name-form6-0">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                                <input type="password" name="password" placeholder="Mot de passe" data-form-field="email" class="form-control" value="" id="email-form6-0">
                            </div>
                            <div class="col-auto mbr-section-btn align-center">
                                <button type="submit" class="btn btn-primary display-4">Connexion</button>
                            </div>


                            <!-- <div class="mbr-section-head"><br>
                             
                                <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                                <h6>Creer votre compte si vous en avez pas ! <strong><a href="inscription.php">S'inscrire ici</a> </strong> </h6>    
                                </p>

                            </div> -->
                            <!-- <div class="col-auto mbr-section-btn align-center"> -->

                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
<!-- telecharger sur mobirise -->