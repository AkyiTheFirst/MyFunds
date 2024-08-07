<?php

//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    //writing db query
    $statement = $pdo->prepare("SELECT * FROM balance WHERE id = '$id'");

    //executing query
    $statement->execute();

    //getting the stream
    $stream = $statement->fetch(PDO::FETCH_ASSOC);

    require('view/finance/edit.view.php');
}

