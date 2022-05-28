<?php

include("connection.php");


$query=$mysqli ->prepare("select * from restaurants");
$query ->execute();
$array = $query->get_result();
$response = [];

while($rest = $array->fetch_assoc()){
    $response[] = $rest;
} 
$json = json_encode($response);
echo $json;




?>
