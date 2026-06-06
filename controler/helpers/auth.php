<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/api/v1/apiUtils.php');

function requireLogin() {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /app/login');
        exit();
    }
}

function requireLoginApi() {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION['email'])) {
        sendAPIResponse(401, 'Not logged in', []);
    }
}