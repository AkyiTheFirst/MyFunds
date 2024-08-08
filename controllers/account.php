<?php

use core\Database;

//connect to db
$config = require('config.php');
$db = new Database($config['database']);

if(isset($_GET['userid'])){
    $userid = $_GET['userid'];
}
else{
    $userid = $_COOKIE['userid'];
}

    $user = $db->query("SELECT * FROM user WHERE userid = :userid", [
        'userid' => $userid
    ])->get();
    $streams = $db->query("SELECT * FROM balance WHERE userid = :userid", [
        'userid' => $userid
    ])->getAll();
    $total = getTotal($streams);
    
require('view/account.view.php');