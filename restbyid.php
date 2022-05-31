<?php

include("connection.php");

$first=$_POST["rest_id"];


$query=$mysqli->prepare("SELECT rest_id,rest_name,rest_city,type_rest,description,review from restaurants,reviews WHERE reviews.rest_reviewed_id=restaurants.rest_id AND rest_id=?;
");
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