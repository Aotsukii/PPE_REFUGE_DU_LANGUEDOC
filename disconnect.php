<?php
session_start();
session_destroy();
header('location:index.php?error=Vous êtes bien déconnecté.');
exit;
?>
