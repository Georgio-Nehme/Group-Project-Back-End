<?php

include("connection.php");


$first=$_POST["rest_name"];
$second=$_POST["user_id"];
$third=$_POST["review"];




$query=$mysqli->prepare("INSERT INTO reviews(rest_reviewed_name,user_reviewer_id,review) VALUES (?,?,?)");
$query->bind_param("sis",$first,$second,$third);
$query->execute();

$response=[];
$response["sucess"]=true;
echo $query->error;
echo json_encode($response);
?>