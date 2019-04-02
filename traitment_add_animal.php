<?php
session_start();
if (isset($_POST['submit'])){
    $nom=htmlspecialchars($_POST['nomA']);
    $age=htmlspecialchars($_POST['ageA']);
    $pelage=htmlspecialchars($_POST['pelageA']);
    $desc=htmlspecialchars($_POST['desc']);
    $race=htmlspecialchars($_POST['raceA']);
    $sexe=htmlspecialchars($_POST['sexeA']);
    $montant=htmlspecialchars($_POST['amount']);
    $date=date("Y-m-d");
    $est_chat=htmlspecialchars($_POST['estChat']);
    $ok_chat=htmlspecialchars($_POST['okChat']) == "on";
    $ok_chien=htmlspecialchars($_POST['okChien']) == "on";
    $ok_kid=htmlspecialchars($_POST['okKid']) == "on";
    $besoin_trait=htmlspecialchars($_POST['besoinTrait']) == "on";

    try {
        $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $stmt=$connect->prepare("INSERT INTO animal (nom_animal, age_animal, sexe_animal, description_animal, ok_chien, ok_chat, ok_kids, prix_adoption, date_creation, pelage_animal, besoinTraitement, est_chat, id_race) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute(array($nom,$age,$sexe,$desc,$ok_chien,$ok_chat,$ok_kid,$montant,$date,$pelage,$besoin_trait,$est_chat,$race));

    header('location:index_gerant.php');
}
?>