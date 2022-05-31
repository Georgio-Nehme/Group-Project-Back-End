<?php

include("connection.php");


$first=$_POST["rest_name"];
$second=$_POST["rest_city"];
$third=$_POST["type_rest"];
$fourth=$_POST["description"];
$fifth=$_POST["picture"];
$sixth=$_POST["rest_id"];


$sql = "UPDATE restaurants SET rest_name=?, rest_city=?, type_rest=?, description=?, picture=? WHERE rest_id=?";
$stmt= $mysqli->prepare($sql);
$stmt->bind_param("sssssi", $first, $second, $third, $fourth, $fifth, $sixth);
$stmt->execute();

//$query=$mysqli->prepare("UPDATE restaurants SET rest_name=?,rest_city=?,type_rest=?,description=?,picture=?  WHERE rest_id=?");
//$query ->bind_param("isssss",$sixth,$first,$second,$third,$fourth,$fifth);
//$query ->execute();
//$array = $query->get_result();


//done
?>