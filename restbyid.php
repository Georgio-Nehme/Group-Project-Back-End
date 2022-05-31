<?php

include("connection.php");

$first=$_POST["rest_id"];


$query=$mysqli->prepare("SELECT * from restaurants WHERE rest_id=?");
$query->bind_param("i",$first);
$query->execute();

$array = $query->get_result();
$response = [];

while($rest = $array->fetch_assoc()){
    $response[] = $rest;
} 
$json = json_encode($response);
echo $json;

//done


?>