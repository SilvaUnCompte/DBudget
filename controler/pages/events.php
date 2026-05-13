<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Regular Events";
$page_name = "Regular Events";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/events.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/footer.php';
