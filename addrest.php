<?php

include("connection.php");


$first=$_POST["rest_name"];
$second=$_POST["rest_city"];
$third=$_POST["type"];
$fourth=$_POST["description"];
$fifth=$_POST["picture"];



$query=$mysqli ->prepare("INSERT INTO restaurants(rest_name,rest_city,type_rest,description,picture) VALUES (?,?,?,?,?)");
$query ->bind_param("sssss",$first,$second,$third,$fourth,$fifth);
$query ->execute();


$response=[];
$response["sucess"]=true;
echo $query->error;
echo json_encode($response);

//done

?>