<?php
	include('Connection.php');
	$query = mysqli_query($conn, "SELECT * FROM Student");
	
	if(!$query){
		printf("Error: %s\n", mysqli_error($conn));
		exit();	
	}
	
	if(isset($_GET['studentid']) && isset ($_GET['isdelete'])){
		$studentid = $_GET['studentid'];
		
		$sql = "DELETE FROM guest WHERE studentId = $studentid";
			if ($conn-> query($sql) === TRUE){
					echo '<script type="text/javascript">';
					echo 'alert("Record deleted successfully.");';
					echo 'window.location.href = "Viewer.php";';
					echo '</script>';	
			}else{
				echo"Error deleting record: " . $conn->error;	
			}
		$conn->close();
	}
	
	//search
	if(isset($_POST['search'])){
		$query = mysqli_query($conn, "SELECT * FROM guest WHERE upper (studentId) LIKE '%". $_POST ['keyword']. "%' OR  upper(studentName) LIKE '%" . $_POST ['keyword']. "%' OR upper(companyName) LIKE '%". $_POST ['keyword']. "%'");
	}
?>


<html>
<head>
<title></title>
</head>
<body>
<center>
	<h1>Student Information List</h1>
	<br><br>
	<form name ="search" action ="index.php" method="post">
	Keyword: <input type ="text" name = "keyword" /> &nbsp;
	<input type ="submit" value = "Search" name ="search"/>
	<br><br>
	</form>
	
	<table border = "2">
		<thead>
			<tr>
				<td>Student ID</td>
				<td>Last Name</td>
				<td>First Name</td>
				<td>Middle Name</td>
				<td>Address</td>
				<td>Date of Birth</td>
				<td>Contact Number</td>
				<td>Position/Rank</td>
				<td>E-mail Address</td>
				<td>ID Presented/ID#</td>
				<td>Contact Person in case of Emergency</td>
				<td>Contact Person Number</td>
				<td>Company</td>
				<td>Company Address</td>
				<td>Company Number</td>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = mysqli_fetch_array($query))
				{
					echo "<tr>";
					echo "<td>" . $row['studentId'] ."</td>";
					echo "<td>" . $row['lastName'] ."</td>";
					echo "<td>" . $row['firstName'] ."</td>";
					echo "<td>" . $row['middleName'] ."</td>";
					echo "<td>" . $row['permanentAddress'] ."</td>";
					echo "<td>" . $row['dateofBirth'] ."</td>";
					echo "<td>" . $row['contactNumber'] ."</td>";
					echo "<td>" . $row['positionRank'] ."</td>";
					echo "<td>" . $row['emailAddress'] ."</td>";
					echo "<td>" . $row['idPresented'] ."</td>";
					echo "<td>" . $row['contactPerson'] ."</td>";
					echo "<td>" . $row['contactPersonNumber'] ."</td>";
					echo "<td>" . $row['companyName'] ."</td>";
					echo "<td>" . $row['companyAddress'] ."</td>";
					echo "<td>" . $row['companyNumber'] ."</td>";
					echo"<td> <a href = 'EditInfo.php?studentid=".$row['studentId']."'> Edit </a></td>";
					echo"<td> <a href = 'DeleteStudent.php?studentid=".$row['studentId']."'> Delete </a></td>";
					echo "</tr>";
				}
			
			?>
		</tbody>
	</table>
		<br><br>
		<input type = "button" value = "Add Student" onclick = "window.location.href = 'AddStudent.php'"/>
</center>
</body>
</html>