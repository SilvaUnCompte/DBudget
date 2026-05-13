<?php
header('Content-Type: application/json');

require($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/operation.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php');


// Security
requireLoginApi();

$id_account = $_GET['id_account'];
$date = $_GET['date'];

$result = Operation::getLastOperationSoldByAccount($id_account, $date);

echo json_encode($result);
