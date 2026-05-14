<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();

$title = "Settings";
$page_name = "Settings";

require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/settings.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/footer.php';