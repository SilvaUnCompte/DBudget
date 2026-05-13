<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

requireLogin();



$title = "Budget";
$page_name = "Budget";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/budget.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/helpers/footer.php';
