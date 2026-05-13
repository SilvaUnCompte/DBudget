<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Operations";
$page_name = "Operations";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/operations.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/footer.php';
