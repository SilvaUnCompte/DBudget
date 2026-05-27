<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();

$title = "Erreur 403 - Accès refusé";
$page_name = "Error 403";

$error_code = 403;
$error_message = "Accès refusé";
$error_description = "Vous n'avez pas les permissions nécessaires pour accéder à cette page.";

http_response_code(403);

require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/error_page.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/footer.php';