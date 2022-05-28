<?php

include("connection.php");


$first=$_POST["email"];
$second=$_POST["password"];

$sql="select * from users where email='".$first."' AND password='".$password"' limit 1";  
$login=$mysqli($sql);