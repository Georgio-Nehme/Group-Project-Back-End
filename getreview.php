<?php

include("connection.php");

$first=$_POST["rest_reviewed_name"];

$query=$mysqli->prepare("SELECT review from reviews where rest_reviewed_name=?");
$query->bind_param("s",$first);
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