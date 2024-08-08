<?php
use core\Database;

//connecting to database
$config = require('config.php');
$db = new Database($config['database']);

//variables
$id = $_POST['id'];

//writing db query
//$statement = $pdo->prepare("DELETE FROM balance WHERE id = '$id'");

$db->query("DELETE FROM balance WHERE id = '$id'");

header('location: /finance');
die();

