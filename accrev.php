<?php

include("connection.php");

$first=$_POST["rest_reviewed_name"];
$second=$_POST["user_reviewer_id"];


$query=$mysqli->prepare("UPDATE reviews  SET status=1 where rest_reviewed_name=? and user_reviewer_id=?");
$query->bind_param("si",$first,$second);
$query->execute();

//Done

?>