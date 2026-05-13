<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

requireLogin();


$title = "Verification";
$page_name = "Verification";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/verification.php';
