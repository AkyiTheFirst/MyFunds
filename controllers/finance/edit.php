<?php
use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$userid = 0;
if(isset($_COOKIE['userid'])){
    $userid = $_COOKIE['userid'];
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    //writing db query and getting the stream
    $stream = $db->query("SELECT * FROM balance WHERE id = '$id' AND userid = '$userid'")->get();

    require('view/finance/edit.view.php');
}

