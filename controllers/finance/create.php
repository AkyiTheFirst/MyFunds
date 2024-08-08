<?php

use core\Database;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //connecting to database
    $config = require('config.php');
    $db = new Database($config['database']);

    //making variables
    $status = getStatus($_POST['status']);
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $account = $_POST['account'];
    $date = date("Y-m-d");

    //writing db query
    $streams = $db->query("INSERT INTO balance(status, description, amount, account, date) VALUES (:status, :description, :amount, :account, :date)",[
        'status' => $status,
        'description' => $description,
        'amount' => $amount,
        'account' => $account,
        'date' => $date
    ]);

    header('location: /finance');
    die();

}

require('view/finance/create.view.php');
