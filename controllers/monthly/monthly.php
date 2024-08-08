<?php

use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$date = date("Y-m-d");
$total = 0;
$userid = 0;
if(isset($_COOKIE['userid'])){
    $userid = $_COOKIE['userid'];
}

//writing db query for calculating total
$streams = $db->query("SELECT * FROM balance WHERE userid = '$userid'")->getAll();

$total = getTotal($streams);

//writing db query for displaying different dates
$dateStreams = $db->query("SELECT DISTINCT `date` FROM balance WHERE userid = '$userid'")->getAll();

require('view/monthly/monthly.view.php');