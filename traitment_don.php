<?php
session_start();
if (isset($_POST['submit'])){
    $date = date("Y-m-d");
    $montant= htmlspecialchars($_POST['amount']);
    $id_user = $_SESSION['ID_MEMBRE'];
    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $send_don = $connect->prepare("INSERT INTO don (montant_don,date_don,id_user) VALUES (?,?,?)");
    $send_don->execute(array($montant,$date,$id_user));

header('location:index_membre.php');
}
?>