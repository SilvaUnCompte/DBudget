<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

requireLogin();


$title = "Operations";
$page_name = "Operations";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/operations.php';
