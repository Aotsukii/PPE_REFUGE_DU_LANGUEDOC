<?php
session_start();
if(isset($_POST['submit'])){

    $date= htmlspecialchars($_POST['dateC']);
    $lieu= htmlspecialchars($_POST['lieuC']);

    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $insert = $connect->prepare("INSERT INTO collecte (date_collecte, lieu_collecte) VALUES (?,?)");
    $insert->execute(array($date,$lieu));
   
    header('location:index_gerant.php');
}
?>