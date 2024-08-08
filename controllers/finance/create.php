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
    $userid = 0;
    if(isset($_COOKIE['userid'])){
        $userid = $_COOKIE['userid'];
    }

    //writing db query
    $streams = $db->query("INSERT INTO balance(status, description, amount, account, date, userid) VALUES (:status, :description, :amount, :account, :date, :userid)",[
        'status' => $status,
        'description' => $description,
        'amount' => $amount,
        'account' => $account,
        'date' => $date,
        'userid' => $userid
    ]);

    header('location: /finance');
    die();

}

require('view/finance/create.view.php');
