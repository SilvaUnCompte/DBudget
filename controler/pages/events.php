<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Regular Events";
$page_name = "Regular Events";

require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/events.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/footer.php';
