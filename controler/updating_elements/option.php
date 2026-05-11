<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/option.php');

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['email'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Not logged']);
    exit;
}

if (!isset($_GET['username']) || !isset($_GET['langue']) || !isset($_GET['theme'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing parameters']);
    exit;
}

$option = new Option($_SESSION['email']);
$option->setUsername($_GET['username']);
$option->setLangue($_GET['langue']);
$option->setTheme((int)$_GET['theme']);
$option->update();

// Update session username
$_SESSION['username'] = $_GET['username'];

http_response_code(200);
echo json_encode(['success' => true]);
