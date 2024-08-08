<?php
use core\Database;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //connect to DB
    $config = require('config.php');
    $db = new Database($config['database']);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $db->query("SELECT * FROM user WHERE email = :email", [
        'email' => $email
    ])->get();
    if(isset($user)){
        if($user['password'] === $password){
            setcookie('userid', $user['userid']);
            $headerLink = 'location: /account?userid=' . $user['userid'];
            header($headerLink);
            die();
        }
    }

    $headerLink = 'location: /login';
    header($headerLink);
    die();
}
require('view/login.view.php');

