<?php

use core\Database;

//variables
$date = date("Y-m-d");
$total = 0;

if(isset($_GET['date'])){
    $date = $_GET['date'];
}
else{
    $date = date("Y-m-d");
}

/* Without Class
//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

//writing db query
$statement = $pdo->prepare("SELECT * FROM balance WHERE date = '$date'");

//executing query
$statement->execute();

//getting data from db
$streams = $statement->fetchAll(PDO::FETCH_ASSOC);
*/

// With Class
$config = require('config.php');
$db = new Database($config['database']);

$streams = $db->query("SELECT * FROM balance WHERE date = '$date'")->getAll();
//*/

$total = getTotal($streams);

require('view/finance/finance.view.php');