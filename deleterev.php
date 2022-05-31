<?php

include("connection.php");

$first=$_POST["rest_reviewed_id"];


$query=$mysqli->prepare("DELETE FROM reviews where rest_reviewed_id=?");
$query->bind_param("s",$first);
$query->execute();

//done

?>