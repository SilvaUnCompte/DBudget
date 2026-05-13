<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Analytics";
$page_name = "Analytics";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/analytics.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/footer.php';
