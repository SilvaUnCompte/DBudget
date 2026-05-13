<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();


$title = "Accounts";
$page_name = "Accounts";
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/accounts.php';
