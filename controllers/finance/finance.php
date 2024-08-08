<?php

use core\Database;

//variables
$financeDate = date("Y-m-d");
$total = 0;

if(isset($_GET['date'])){
    $financeDate = $_GET['date'];
}
else{
    $financeDate = date("Y-m-d");
}

// With Class
$config = require('config.php');
$db = new Database($config['database']);

$streams = $db->query("SELECT * FROM balance WHERE date = '$financeDate'")->getAll();
//*/
$total = getTotal($streams);

require('view/finance/finance.view.php');