<?php

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function dd($data){
    echo"<pre>";
    print_r($data);
    die();
} 
?>