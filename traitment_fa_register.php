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
    $espace_dispo=htmlspecialchars($_POST['espaceDispo']);
    $type_logement=htmlspecialchars($_POST['typelogement']);
    $okQuarant=htmlspecialchars($_POST['okQuarant']) == "on";
    $aChien=htmlspecialchars($_POST['aChien']) == "on";
    $aChat=htmlspecialchars($_POST['aChat']) == "on";
    $aEnfant=htmlspecialchars($_POST['aEnfant']) == "on";


    $insert = $connect->prepare("INSERT INTO user (mail, password, nom_user, prenom_user, adresse_user, ville_user, tel_user) VALUES (?,?,?,?,?,?,?)");
    $insert->execute(array($mail,$pass,$nom,$prenom,$adresse,$ville,$tel));
    $id=$connect->lastInsertId();
    $insert->closeCursor();

    $insert2=$connect->prepare("INSERT INTO fa (id_user, type_Logement, aChien, aChat, aEnfant, ok_Quarantaine, espace_Dispo, mail, password, nom_user, prenom_user, adresse_user, ville_user, tel_user) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert2->execute(array($id,$type_logement,$aChien,$aChat,$aEnfant,$okQuarant,$espace_dispo,$mail,$pass,$nom,$prenom,$adresse,$ville,$tel));

    header('location:index.php');
    exit();
}
?>