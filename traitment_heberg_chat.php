<?php
session_start();
$id_animal=$_GET['id_animal'];
$id_fa = $_SESSION['ID_FA'];
try {
    $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$heberger = $connect->prepare("UPDATE animal SET id_fa=? WHERE id_animal=$id_animal");
$heberger->execute(array($id_fa));

header('location:index_fa.php');
?>