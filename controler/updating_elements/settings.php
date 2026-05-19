<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php';

requireLoginApi();

$data = json_decode(file_get_contents('php://input'), true);
$username = trim($data['username'] ?? '');

if (empty($username)) {
    echo json_encode(['success' => false, 'message' => 'Nom invalide.']);
    exit;
}

$user = new User($_SESSION['email']);
$user->setUsername($username);
$user->update();

$_SESSION['username'] = $username;

echo json_encode(['success' => true]);