<?php
session_start();
if (isset($_POST['submit'])){
    $nomR=htmlspecialchars($_POST['nomR']);

    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $stmt=$connect->prepare("INSERT INTO race (lib_race) VALUE (?)");
    $stmt->execute(array($nomR));

    header('location:add_animal.php');
}
?>