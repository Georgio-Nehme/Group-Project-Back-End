<?php

include("connection.php");


$first=$_POST["rest_name"];
$second=$_POST["rest_city"];
$third=$_POST["type"];
$fourth=$_POST["description"];
$fifth=$_POST["picture"];



$query=$mysqli ->prepare("UPDATE restaurants  SET (rest_name,rest_city,type_rest,description,picture) VALUES (?,?,?,?,?)"  );
$query ->bind_param("sssss",$first,$second,$third,$fourth,$fifth);
$query ->execute();



//id rest missing
?>