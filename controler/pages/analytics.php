<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

requireLogin();


$title = "Analytics";
$page_name = "Analytics";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/analytics.php';
