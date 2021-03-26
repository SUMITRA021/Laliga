
<?php 

// Username is root 
$user = 'root'; 
$password = ''; 

// Database name is Laliga
$database = 'Laliga'; 

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
$sql = "SELECT * FROM player "; 
$result = $mysqli->query($sql); 
$mysqli->close(); 

?> 




<!DOCTYPE html> 
<html lang="en"> 



<head> 
	<meta charset="UTF-8"> 
	<title>Player Details</title> 
	<!-- CSS FOR STYLING THE PAGE --> 
	<style>
		* {
  font-family: sans-serif; /* Change your font family */
}


h1
{
	margin-left:40%;
	font-size:40px;
}

.abc
{
	background-image: linear-gradient(#3a6186, #89253e);
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  margin-left:25%;
}


.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

	</style> 
</head> 

<body> 

    <section class="abc"> 
		<h1>Player Details</h1> 
		<!-- TABLE CONSTRUCTION--> 
		<table class="content-table"> 
			<tr> 
				<th>Pid</th> 
				<th>Pname</th> 
				<th>Psdate</th> 
				<th>Pedate</th>
                <th>Age</th>
                <th>cname</th>  
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
				<td><?php echo $rows['Pid'];?></td> 
				<td><?php echo $rows['Pname'];?></td> 
				<td><?php echo $rows['Psdate'];?></td> 
				<td><?php echo $rows['Pedate'];?></td>
                <td><?php echo $rows['Age'];?></td>
                <td><?php echo $rows['cname'];?></td> 
			</tr> 
			<?php 
				} 
			?> 
		</table> 
	</section> 
 </body> 
</html> 
