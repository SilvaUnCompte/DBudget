<?php

# Don't change
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

// Starting Session
requireLogin();

// Variables page
$title = "Home";
$page_name = "Overview";

// Show Template
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/index.php';
