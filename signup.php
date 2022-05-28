<?php

include("connection.php");


$first=$_POST["sname"];
$second=$_POST["fname"];
$third=$_POST["phone_number"];
$fourth=$_POST["email"];
$sixth=$_POST["type"];
$seventh=$_POST["city"];
$fifth = $_POST["password"];

$hashed_password=password_hash($fifth,PASSWORD_DEFAULT);

$query=$mysqli ->prepare("INSERT INTO users(sname,fname,phone_number,email,type,city,password) VALUES (?,?,?,?,?,?,?)");
$query ->bind_param("ssissss",$first,$second,$third,$fourth,$sixth,$seventh,$hashed_password);
$query ->execute();

?>