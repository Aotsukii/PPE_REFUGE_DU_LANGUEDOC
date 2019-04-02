<?php
session_start();
    $id_collecte=$_GET['id_collecte'];
    $id_user = $_SESSION['ID_MEMBRE'];
    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $participer = $connect->prepare("INSERT INTO participer (id_collecte, id_user) VALUES (?,?)");
    $participer->execute(array($id_collecte,$id_user));

    header('location:index_membre.php');
?>