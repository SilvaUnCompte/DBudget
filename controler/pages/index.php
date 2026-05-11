<?php

// Démarrage de session
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['email'])) {
    header('Location: /controler/login/login.php');
    exit();
}

// Variables de la page
$title = "Home";
$page_name = "Overview";

// Affichage du template
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/index.php';
