<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');

if (session_status() !== PHP_SESSION_ACTIVE) session_start();
$title = "Login";
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/index.php';

if (isset($_GET['input_email']) && isset($_GET['input_password'])) {
    
    $email = $_GET['input_email'];
    $password = $_GET['input_password'];

    if (User::checkLogin($email, $password)) {

        $user = new User($email);
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user->getUsername();

        header("Location: /controler/pages/index.php");
    } else {
        $error = 1;
        require $_SERVER['DOCUMENT_ROOT'] . '/public/view/login.php';
    }
} else {
    $error = 0;
    require $_SERVER['DOCUMENT_ROOT'] . '/public/view/login.php';
}
