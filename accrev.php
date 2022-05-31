<?php

include("connection.php");

$first=$_POST["rest_reviewed_name"];
$second=$_POST["user_reviewer_id"];


$query=$mysqli->prepare("UPDATE reviews  where rest_reviewed_name=? and user_reviewer_id=? SET status=1");
$query->bind_param("si",$first,$second);
$query->execute();

//not working

?>