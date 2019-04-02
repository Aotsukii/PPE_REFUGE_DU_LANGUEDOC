<?php
try {
    $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if(isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['orangeForm-name']);
    $prenom = htmlspecialchars($_POST['orangeForm-surname']);
    $adresse = htmlspecialchars($_POST['orangeForm-address']);
    $ville = htmlspecialchars($_POST['orangeForm-zip']);
    $mail = htmlspecialchars($_POST['orangeForm-email']);
    $tel = htmlspecialchars($_POST['orangeForm-phone']);
    $pass = htmlspecialchars($_POST['orangeForm-pass']);
    $pass = sha1($pass);


    $insert = $connect->prepare("INSERT INTO user (mail, password, nom_user, prenom_user, adresse_user, ville_user, tel_user) VALUES (?,?,?,?,?,?,?)");
    $insert->execute(array($mail,$pass,$nom,$prenom,$adresse,$ville,$tel));
    $id=$connect->lastInsertId();
    $insert->closeCursor();

    $insert2=$connect->prepare("INSERT INTO membre (id_user, mail, password, nom_user, prenom_user, adresse_user, ville_user, tel_user) VALUES (?,?,?,?,?,?,?,?)");
    $insert2->execute(array($id,$mail,$pass,$nom,$prenom,$adresse,$ville,$tel));

    header('location:index.php');
    exit();
}
?>