<?php
session_start();
    $id_user = $_GET['id_user'];
    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $delete= $connect->prepare("DELETE FROM fa WHERE id_user=$id_user");
    $delete->execute();
    $delete->closeCursor();

    $delete2=$connect->prepare("DELETE FROM user WHERE id_user=$id_user");
    $delete2->execute();


header('location:gestion_membres.php');
?>