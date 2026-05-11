<?php
header('Content-Type: application/json');

require($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/option.php');

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['email'])) {
    echo json_encode(['error' => 'Not logged']);
    exit;
}

$option = new Option($_SESSION['email']);

echo json_encode([
    'username' => $option->getUsername(),
    'langue'   => $option->getLangue(),
    'theme'    => $option->getTheme(),
    'langues_list' => Option::getLanguesList()
]);
