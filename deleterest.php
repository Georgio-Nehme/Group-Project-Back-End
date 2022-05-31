<?php

include("connection.php");


$first=$_POST["rest_name"];



$query=$mysqli->prepare("DELETE FROM restuarants where rest_name=?");
$query->bind_param("s",$first);
$query->execute();

$response=[];
$response["sucess"]=true;
echo $query->error;
echo json_encode($response);

//bool 
?>