<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');

if (isset($_GET['input_email']) && isset($_GET['input_password'])) {

    $email = $_GET['input_email'];
    $password = $_GET['input_password'];

    if (User::checkLogin($email, $password)) {

        if (session_status() !== PHP_SESSION_ACTIVE) session_start();

        $user = new User($email);
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user->getUsername();

        header("Location: /controler/pages/index.php");
    } else {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        $title = "Login";
        $error = 1;
        require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/login.php';
    }
} else {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    $title = "Login";
    $error = 0;
    require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/login.php';
}
