<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

requireLogin();


$title = "Regular Events";
$page_name = "Regular Events";

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/events.php';
