<?php
$sname = "localhost";
$username = "root";
$password = "";

$dbname = "interns";

$conn = mysqli_connect($sname, $username, $password, $dbname);

if(!$conn){

	echo "Connection failed!";
	exit();
}