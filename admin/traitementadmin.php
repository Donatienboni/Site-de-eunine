<?php
session_start();
// $connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
// $insert = $connect->prepare("INSERT INTO connexionadmin(email,mdp )VALUES(?,?) ");
// $insert->execute(array($_POST['email'], $_POST['password']));

// echo "Je suis fort";

$abc = new PDO('mysql:host=localhost;dbname=db_site_eunice', 'root', '');

$verif = $abc->prepare("SELECT * FROM connexion_admin where email=? AND mdp=? "); 
$verif->execute(array($_POST['email'], $_POST['password'])); //////partie formulaire/////////
$trouve = $verif->rowcount();

$personneId = $verif->fetch();
// $id = $personneId['id'];

if ($trouve == 0) {
    $_SESSION['message'] = " Votre Mot de passe ou Email incorrect";
    header('location:index.php');
} else {
    // $_SESSION['message'] = " Valide ";
    header('location:admin-one/dist/index.php');

}
// if($trouve=1){
//     foreach($verif as $user){
        
//         $email=$user['email'];
//      }
    
//          session_start();
//          $_SESSION["email"] = $email;
//         header('location:admin-one/dist/index.php');
// }