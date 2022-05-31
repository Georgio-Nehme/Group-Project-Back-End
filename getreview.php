<?php

include("connection.php");


$query=$mysqli->prepare("SELECT review,rest_reviewed_id from reviews where status=0");
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