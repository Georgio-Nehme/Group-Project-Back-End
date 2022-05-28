<?php

include("connection.php");

$first=$_GET["rest_name"];


$query=$mysqli->prepare("select review from reviews where rest_reviewed_name=?");
$query->bind_param("s",$first);
$query->execute();
$array = $query->get_result();
$response = [];

while($rest = $array->fetch_assoc()){
    $response[] = $rest;
} 
$json = json_encode($response);
echo $json;




?>