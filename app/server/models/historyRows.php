<?php

require '../services/conn_host.php';
require '../services/prepareAndExecute.php';

session_start();

$jsonData;

$querySelect = 'SELECT data_operation, account_id_destiny, value_transaction FROM historyaccount WHERE account_id = ?';
$params = array($_SESSION['account_id']);
$historyRows = prepareAndExecute($conn, $querySelect, $params, 's');

$jsonData['linhas'] = $historyRows;


echo json_encode($jsonData);




