<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();



$title = "Budget";
$page_name = "Budget";

require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/budget.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/footer.php';
