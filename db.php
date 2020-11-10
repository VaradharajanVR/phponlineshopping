<?php

$servername = "ec2-3-211-176-230.compute-1.amazonaws.com";
$username = "kkdttekwzgzpzf";
$password = "353d4a03365031e5268598c2900d14bd8fc9ee2c987100be7607cb82dcfee52c";
$db = "dfb0au6ml6gppq";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
