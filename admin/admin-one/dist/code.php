<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM produit_index WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Suppression reuissit";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression non reuissit";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);


    $course = mysqli_real_escape_string($con, $_POST['course']);
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

// description='$description || image='$course' ---> image ici variable image et qui est dans la DB
    $query = "UPDATE produit_index SET image='$course', nom='$nom', description='$description' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Modification appliquer avec succès";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Modification non appliquer ";
        header("Location: student-edit.php");
        exit(0);
    }
}


/////////////////////////////////////////////////////////////////////////

if (isset($_POST['save_student'])) {
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    
// taitement images
    $course=$_FILES['course']['name']; //le nom de la courses et name son introduction ////// == name="course"
    $chemin="../dist/image".$course;     // $chemin = "image/" ==le lien de l'image
    move_uploaded_file($_FILES['course']['tmp_name'],$chemin);
    

    $query = "INSERT INTO produit_index (description,nom,image) VALUES ('$description','$nom','$course')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Creation reussit";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: student-create.php");
        exit(0);
    }
}