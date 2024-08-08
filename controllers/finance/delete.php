<?php
use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$id = $_POST['id'];
$userid = 0;
if(isset($_COOKIE['userid'])){
    $userid = $_COOKIE['userid'];
}

//writing db query
//$statement = $pdo->prepare("DELETE FROM balance WHERE id = '$id'");

$db->query("DELETE FROM balance WHERE id = '$id' AND userid = '$userid'");

header('location: /finance');
die();

