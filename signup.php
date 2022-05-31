<?php

include("connection.php");


$name=$_POST["sname"];
$fname=$_POST["fname"];
$phone=$_POST["phone_number"];
$email=$_POST["email"];
$type=$_POST["type"];
$city=$_POST["city"];
$password= hash("sha256",$_POST["password"]);


$query=$mysqli ->prepare("INSERT INTO users(sname,fname,phone_number,email,type,city,password) VALUES (?,?,?,?,?,?,?)");
$query ->bind_param("ssissss",$name,$fname,$phone,$email,$type,$city,$password);
$query ->execute();

?>