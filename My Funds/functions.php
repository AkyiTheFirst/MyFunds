<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function getStatus($value){
    if($value === 'expense'){
        return 'e';
    }else{
        return 'i';
    }
}

function getTotal($streams){
    $total = 0;
    foreach($streams as $stream){
        if($stream['status'] === 'i'){
            $total = $total + $stream['amount'];
        }
        if($stream['status'] === 'e'){
            $total = $total - $stream['amount'];
        }
    }
    return $total;
}