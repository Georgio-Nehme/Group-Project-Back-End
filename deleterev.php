<?php

include("connection.php");

$first=$_POST["rest_name"];


$query=$mysqli->prepare("DELETE FROM reviews where rest_reviewed_name=?");
$query->bind_param("s",$first);
$query->execute();

//done

?>