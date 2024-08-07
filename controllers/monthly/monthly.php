<?php

//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

//variables
$date = date("Y-m-d");
$total = 0;

//writing db query
$statement = $pdo->prepare("SELECT * FROM balance");

//executing query
$statement->execute();

//getting data from db
$streams = $statement->fetchAll(PDO::FETCH_ASSOC);
$total = getTotal($streams);

//writing db query
$statement = $pdo->prepare("SELECT DISTINCT `date` FROM balance");

//executing query
$statement->execute();

//getting data from db
$dateStreams = $statement->fetchAll(PDO::FETCH_ASSOC);

require('view/monthly/monthly.view.php');