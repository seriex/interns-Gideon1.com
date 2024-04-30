<?php
if(isset($_POST['Name']) && isset($_POST['LastName']) && isset($_POST['Gender']) && isset($_POST['Mobile']) && isset($_POST['School']) && isset($_POST['Level']) && isset($_POST['Program']) && isset($_POST['COUNTRY']) && isset($_POST['Entry_Date'])){
       include 'db_conn.php';

function validate($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$Name = validate($_POST['Name']);
$LastName = validate($_POST['LastName']);
$Gender = validate($_POST['Gender']);
$Mobile = validate($_POST['Mobile']);
$School = validate($_POST['School']);
$Level = validate($_POST['Level']);
$Program = validate($_POST['Program']);
$COUNTRY = validate($_POST['COUNTRY']);
$Entry_Date = validate($_POST['Entry_Date']);

if(empty($LastName) || empty($Name) || empty($Gender) || empty($Mobile) || empty($School) || empty($Level) || empty($Program) || empty($COUNTRY)|| empty($Entry_Date)){

  header("Location: index.html");
}else{

	$sql = "INSERT INTO students(Name, LastName, Gender, Mobile, School, Level, Program, COUNTRY, Entry_Date) VALUES('$Name', '$LastName', '$Gender', '$Mobile', '$School', '$Level', '$Program', '$COUNTRY', '$Entry_Date')";
	$res = mysqli_query($conn, $sql);

	if($res){

		echo "<h2>Your Registration with East African University Rwanda was successfully submitted, we are going to call you soon!<h2>";
	}else{

		echo "Your message could not be sent!";
	}
}

}else {

	header("Location: index.html");
}