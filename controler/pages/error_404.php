<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php';

requireLogin();

$title = "Erreur 404 - Page non trouvée";
$page_name = "Error 404";

$error_code = 404;
$error_message = "Page non trouvée";
$error_description = "La page que vous cherchez n'existe pas ou a été déplacée.";

http_response_code(404);

require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/error_page.php';
require $_SERVER['DOCUMENT_ROOT'] . '/public/view/helpers/footer.php';