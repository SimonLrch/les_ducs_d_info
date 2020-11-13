<?php
session_start();
if (isset($_SESSION["email"])) {$profil_email = $_SESSION["email"];}
if (isset($_SESSION["nom"])) {$profil_nom = $_SESSION["nom"];}
if (isset($_SESSION["prenom"])) {$profil_prenom = $_SESSION["prenom"];}
?>