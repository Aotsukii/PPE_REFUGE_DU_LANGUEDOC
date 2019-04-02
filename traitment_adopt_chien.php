<?php
session_start();
$id_animal=$_GET['id_animal'];
$id_membre = $_SESSION['ID_MEMBRE'];
try {
    $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$adopter = $connect->prepare("UPDATE animal SET id_membre=? WHERE id_animal=$id_animal");
$adopter->execute(array($id_membre));

header('location:index_membre.php');
?>