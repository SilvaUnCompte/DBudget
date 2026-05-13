<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Verification";
$page_name = "Verification";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/verification.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/footer.php';
