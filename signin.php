<?php

include("connection.php");


$first=$_POST["email"];
$second=$_POST["password"];

$sql="select * from users where email='".$first."' AND password='".$password"' limit 1";  
$login=$mysqli($sql);

if (mysql_num_rows($login)==1) {
    echo "You have successfully logged in!";
    exit();
   }
   
   
   else {
    echo "You have entered wrong username or password" ;
    exit();
   }