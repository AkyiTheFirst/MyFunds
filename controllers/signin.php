<?php
use core\Database;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //connect to DB
    $config = require('config.php');
    $db = new Database($config['database']);

    //variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $users = $db->query("SELECT * FROM user")->getAll();

    foreach($users as $user){
        if($user['email'] === $email){

            //meaning already has same email signed in
            $headerLink = 'location: /signin';
            header($headerLink);
            die();
        }
    }

    $db->query("INSERT INTO user(username, email, password) VALUES(:username, :email, :password)", [
        'username' => $username,
        'email' => $email,
        'password' => $password
    ]);
    $signInUser = $db->query("SELECT * FROM user WHERE email = '$email'")->get();
    setcookie('userid', $signInUser['userid']);

    $headerLink = 'location: /account';
    header($headerLink);
    die();
}
require('view/signin.view.php');