<?php

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['email'])) {
    header('Location: /controler/login/login.php');
    exit();
}

$title = "Operations";
$page_name = "Operations";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/operations.php';
