<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'interns';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM students ORDER BY Name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>INTERNS ONLINE REGISTRATION RECORD</title>
	<a href="index.html"> BACK</a>
	<a href="datadisply.php"> Export Data</a>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 0px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 0px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 0px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>INTERNS ONLINE REGISTRATION RECORD</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>NAME</th>
				<th>LASTNAME</th>
				<th>GENDER</th>
				<th>MOBILE</th>
				<th>SCHOOL</th>
				<th>LEVEL</th>
				<th>PROGRAM</th>
				<th>COUNTRY</th>
				<th>ENTRY DATE</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Name'];?></td>
				<td><?php echo $rows['LastName'];?></td>
				<td><?php echo $rows['Gender'];?></td>
				<td><?php echo $rows['Mobile'];?></td>
				<td><?php echo $rows['School'];?></td>
				<td><?php echo $rows['Level'];?></td>
				<td><?php echo $rows['Program'];?></td>
				<td><?php echo $rows['COUNTRY'];?></td>
				<td><?php echo $rows['Entry_Date'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
