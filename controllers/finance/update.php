<?php

//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

//variables
$id = $_POST['id'];
$status = getStatus($_POST['status']);
$description = $_POST['description'];
$amount = $_POST['amount'];
$account = $_POST['account'];

var_dump($_POST);

//writing db query
$statement = $pdo->prepare("UPDATE balance SET status = '$status', description = '$description', amount = '$amount', account = '$account' WHERE id = '$id'");

//executing query
$statement->execute();

$headerLink = 'location: /finance?date=' . $_POST['date'];
header($headerLink);
die();