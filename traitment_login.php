<?php
session_start();
try {
    $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$login= htmlspecialchars($_POST['defaultForm-email']);
$pass= htmlspecialchars($_POST['defaultForm-pass']);
$recovery_user = $connect->prepare("SELECT * FROM user WHERE mail = ? AND password = ?");
$recovery_user->execute(array($login,$pass));

if($recovery_user->rowcount() == 1) {
    $ger_user = $connect->prepare("SELECT * FROM gerant WHERE mail = ? AND password = ?");
    $ger_user->execute(array($login,$pass));
    $fa_user = $connect->prepare("SELECT * FROM fa WHERE mail = ? AND password = ?");
    $fa_user->execute(array($login, $pass));
    $mem_user = $connect->prepare("SELECT * FROM membre WHERE mail = ? AND password = ?");
    $mem_user->execute(array($login, $pass));
    if($ger_user->rowcount() == 1) {
        header('location:index_gerant.php');
    } elseif ($fa_user->rowcount() == 1) {
        header('location:index_fa.php');
    } elseif ($mem_user->rowcount() == 1) {
        header('location:index_membre.php');
    } else {
        header('location:index.php');
    }
}
?>

