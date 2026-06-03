<?php

function requireLogin() {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
        header('Location: /app/login');
        exit();
    }
}

function requireLoginApi() {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION['email'])) {
        echo json_encode(['error' => 'Not logged']);
        exit;
    }
}