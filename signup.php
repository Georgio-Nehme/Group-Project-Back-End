<?php

include("connection.php");


$first=$_POST["sname"];
$second=$_POST["fname"];
$third=$_POST["phone_number"];
$fourth=$_POST["email"];
$sixth=$_POST["type"];
$seventh=$_POST["city"];
$fifth= hash("sha256", $_POST["password"]);


$query=$mysqli ->prepare("INSERT INTO users(sname,fname,phone_number,email,type,city,password) VALUES (?,?,?,?,?,?,?)");
$query ->bind_param("ssissss",$first,$second,$third,$fourth,$sixth,$seventh,$fifth);
$query ->execute();

?>