<?php

// Démarrage de session
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

// Variables de la page
$title = "Home";
$page_name = "Overview";

// Affichage du template
require $_SERVER['DOCUMENT_ROOT'] . '/Epargne-Controle/public/templates/index.php';