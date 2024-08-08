<?php

use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$date = date("Y-m-d");
$total = 0;

//writing db query for calculating total
$streams = $db->query("SELECT * FROM balance")->getAll();

$total = getTotal($streams);

//writing db query for displaying different dates
$dateStreams = $db->query("SELECT DISTINCT `date` FROM balance")->getAll();

require('view/monthly/monthly.view.php');