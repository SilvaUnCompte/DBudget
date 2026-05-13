<?php
header('Content-Type: application/json');

require($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/controler/helpers/auth.php');


// Security
requireLoginApi();

$arg = json_decode($_GET["accounts"]);

if (isset($_GET["date"])) {
    $date = $_GET["date"];
    $futureDate = date('Y-m-d', strtotime('+1 year', strtotime($date)));
} else {
    $date = date("Y-m-d");
}


// Get all id accounts
foreach ($arg as $key => $value) {
    $accounts[] = $value->id_account;
}

$query = $db->prepare('SELECT * FROM regular_event WHERE id_account IN (' . implode(',', $accounts) . ') ' . ' AND end >= \'' . $date . '\'' . ' AND start <= \'' . $futureDate . '\' ORDER BY start ASC');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
