<?php

//use core\Database;

//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
//$config = require('config.php');
//$db = new Database($config['database']);

//variables
$date = date("Y-m-d");
$total = 0;

if(isset($_GET['date'])){
    $date = $_GET['date'];
}
else{
    $date = date("Y-m-d");
}

//writing db query
$statement = $pdo->prepare("SELECT * FROM balance WHERE date = '$date'");

//executing query
$statement->execute();

//$db->query("SELECT * FROM balance WHERE date = '$date'");

//getting data from db
$streams = $statement->fetchAll(PDO::FETCH_ASSOC);
//$streams = $db->query("SELECT * FROM balance WHERE date = '$date'")->getAll();
$total = getTotal($streams);

require('view/finance/finance.view.php');