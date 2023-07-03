<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ajouter Utilisateur</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter utilisateur
                            <a href="profile.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
        
                    <div class="card-body">

<div class="conteneursytle">
                        <form action="code-utilisateur.php" method="POST">
                        <!-- <table> -->
                            <input type="hidden" name="student_id">

                            <!-- <thead>
                            <tr>
                                <th><label>Mot de passe </label></th>
                                <th><label>Telephone </label></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
<input type="text" name="email" class="form-control">
                                </td>
                                                                
                                <td>
<input type="text" name="mdp" class="form-control">
                                </td>
                            </tr>
                            </tbody>
                              -->
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="name" class="form-control">
                            </div> 
                            <div class="mb-3">
                                <label>Mot de passe </label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <!-- <div class="mb-3">
                                <label>Nom </label>
                                <input type="text" name="nom" class="form-control">
                            </div> -->
                            <!-- <div class="mb-3">
                                <label>Telephone </label>
                                <input type="text" name="mdp" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">
                                    Appliquer
                                </button>
                            </div>
                        <!-- </table> -->
                        </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>