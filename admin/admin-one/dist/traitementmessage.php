<?php
$connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$insert = $connect->prepare("INSERT INTO tbmessage(nom,mail,sms,numtelephone) VALUES(?,?,?,?)");
$insert->execute(array($_POST['nom'], $_POST['email'], $_POST['message'], $_POST['telephone']));

header('location:contact.php');

//nom base de donnee =blog |nom table =tbmessage |      nom / mail /sms

//message email nom


// $connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

// $insert = $connect->prepare("INSERT INTO connexionadmin (email,mdp,nom,telephone) VALUES(?,?,?,?)");
// $insert->execute(array($_POST['email'], $_POST['password'], $_POST['name'], $_POST['phone']));

// header('location:index.html');