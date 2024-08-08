<?php
use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    //writing db query and getting the stream
    $stream = $db->query("SELECT * FROM balance WHERE id = '$id'")->get();

    require('view/finance/edit.view.php');
}

