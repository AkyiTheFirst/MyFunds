<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //connecting to database
    $dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
    $pdo = new PDO($dsn);

    //making variables
    $status = getStatus($_POST['status']);
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $account = $_POST['account'];
    $date = date("Y-m-d");

    //writing db query
    $statement = $pdo->prepare("INSERT INTO balance(status, description, amount, account, date) VALUES ('$status', '$description', '$amount', '$account', '$date')");

    //executing query
    $statement->execute();

    header('location: /finance');
    die();

}

require('view/finance/create.view.php');
