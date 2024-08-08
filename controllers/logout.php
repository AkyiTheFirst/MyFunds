<?php

if($_SERVER['REQUEST_METHOD'] === "POST"){
    setcookie('userid', 0, time() - 3600);
}

$headerLink = 'location: /';
header($headerLink);
die();