<?php

$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';

try{
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user, $db_pass);
}catch(Exception $e){
    '<p>'.$e->getMessage().'</p>';
}

$array = [
    'error' =>'',
    'result' =>[] 
];
   

