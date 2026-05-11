<?php

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['email'])) {
    header('Location: /controler/login/login.php');
    exit();
}

$title = "Analytics";
$page_name = "Analytics";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/analytics.php';
