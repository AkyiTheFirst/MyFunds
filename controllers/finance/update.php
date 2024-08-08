<?php
use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$id = $_POST['id'];
$status = getStatus($_POST['status']);
$description = $_POST['description'];
$amount = $_POST['amount'];
$account = $_POST['account'];

var_dump($_POST);

//writing db query
//$statement = $pdo->prepare("UPDATE balance SET status = '$status', description = '$description', amount = '$amount', account = '$account' WHERE id = '$id'");

$streams = $db->query("UPDATE balance SET status = :status, description = :description, amount = :amount, account = :account WHERE id = :id",[
    'id' => $id,
    'status' => $status,
    'description' => $description,
    'amount' => $amount,
    'account' => $account,
]);

$headerLink = 'location: /finance?date=' . $_POST['date'];
header($headerLink);
die();