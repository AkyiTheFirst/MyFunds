<?php

//connecting to database
$dsn = "mysql:host=localhost;port=3306;dbname=myfunds;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
$id = $_POST['id'];

//writing db query
$statement = $pdo->prepare("DELETE FROM balance WHERE id = '$id'");
//  WHERE date = '$date'

//if(deleteConfirmation() = true){
    //executing query
    $statement->execute();                    
//}

header('location: /finance');
die();

