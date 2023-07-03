<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>voir message
                            <a href="tables.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                    $id_message = $_GET["id"];
                    
                     $abc = new PDO('mysql:host=localhost;dbname=db_site_eunice', 'root', ''); 
                // connexion a la base  de donnee
                $rqt=$abc->query("SELECT * FROM contact WHERE id='$id_message'")->fetch();// nom de la table 
                 
                    
             ?>

                                <div class="mb-3">
                                    <label>id_message</label>
                                    <p class="form-control">
                                        <?= $rqt['id']; ?>
                                        <!-- info de la base de donnee  -->
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>nom et prenom</label>
                                    <p class="form-control">
                                        <?= $rqt['nom']; ?>
                                        <!-- info de la base de donnee  -->
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $rqt['email']; ?>
                                        <!-- info de la base de donnee  -->
                                    </p>
                                </div>      
                                <div class="mb-3">
                                    <label>produit</label>
                                    <p class="form-control">
                                        <?= $rqt['produit']; ?>
                                        <!-- info de la base de donnee  -->
                                    </p>
                                </div>                                  
                                <div class="mb-3">
                                    <label>message</label>
                                    <p class="form-control">
                                        <?= $rqt['message']; ?>
                                        <!-- info de la base de donnee  -->
                                    </p>
                                </div>                              
<!-- fin pour afficher sms des voiture, etc ...  -->

<!--  -->

                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>