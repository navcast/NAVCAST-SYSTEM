<?php
	include("Connection.php");
	
	$studentId = $_GET['studentid'];
	$query = mysqli_query($conn, "SELECT * FROM student WHERE studentId = '$studentId'");
	$row = mysqli_fetch_array($query);
	
	//update
	if(isset($_POST['edit'])){
		$lastName = $_POST ['lastname'];
		$firstName = $_POST ['firstname'];
		$middleName = $_POST ['middlename'];
		$permanentAdd = $_POST ['address'];
		$dateOfbirth = $_POST ['birthday'];
		$contactNumber = $_POST ['number'];
		$positionRank = $_POST ['position'];
		$emailAddress = $_POST ['email'];
		$idPresented = $_POST ['idpresented'];
		$contactPerson = $_POST ['contactperson'];
		$contactPersonNumber = $_POST ['contactpersonnumber'];
		$companyName = $_POST ['companyname'];
		$companyAddress = $_POST ['companyaddress'];
		$companyNumber = $_POST ['companynumber'];
		
		//first non spaceletter 3
		$first = substr(str_replace(' ', '', $studentName),0 ,3);
		$rand = rand(0,99);
		$second = str_pad($rand, 5, "0" , STR_PAD_LEFT);
		$date = date('dMY');
		$time = date ('His');
		
		$id1 = strtoupper($first . "-" . $second . "-" . $date . "-" . $time);
		
		$query2 = "UPDATE student SET studentId = '$id1', lastName = '$lastName', firstName = '$firstName', middleName = '$middleName', permanentAddress = '$permanentAdd', dateofBirth = '$dateOfbirth', contactNumber = '$contactNumber', positionRank = '$positionRank', emailAddress = '$emailAddress', idPresented = '$idPresented', contactPerson = '$contactPerson', contactPersonNumber = '$contactPersonNumber', companyName = '$companyName', companyAddress = '$companyAddress', companyNumber = '$companyNumber'  WHERE studentId = '$id1'";
		
		if ($conn-> query($query2)=== TRUE){
				echo'<script> alert("Record updated successfully.");';
				echo'window.location.href = "Viewer.php";';
				echo'</script>';
			
		}else{
			echo"Error: " . $query2 . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>



<html>
<head></head>
<body>
<center>
	
	<form name = "edit" action = "EditInfo.php?studentId=<?php echo $row['studentId']; ?>" method="POST">
	Student ID: <input name = "studentid" type = "text" value ="<?php if(isset($studentId)) {echo $studentId;} ?> " disabled /><br><br>
	Last Name: <input name = "lastname" type= "text" value = "<?php echo $row['lastName'];?>" required/> <br><br>
	First Name: <input name = "firstname" type= "text" value = "<?php echo $row['firstName'];?>" required/> <br><br>
	Middle Name: <input name = "middlename" type= "text" value = "<?php echo $row['middleName'];?>" required/> <br><br>
	Permanent Address: <input name = "address" type= "text" value = "<?php echo $row['permanentAddress'];?>" required/> <br><br>
	Date of Birth: <input name = "birthday" type= "text" value = "<?php echo $row['dateofBirth'];?>" required/> <br><br>
	Contact Number: <input name = "number" type= "text" value = "<?php echo $row['contactNumber'];?>" required/> <br><br>
	Position/Rank: <input name = "position" type= "text" value = "<?php echo $row['positionRank'];?>" required/> <br><br>
	E-mail Address: <input name = "email" type= "text" value = "<?php echo $row['emailAddress'];?>" required/> <br><br>
	ID Presented/ID Number: <input name =   "idpresented" type= "text" value = "<?php echo $row['idPresented'];?>" required/> <br><br>
	Contact Person in case of Emergency: <input name =   "contactperson" type= "text" value = "<?php echo $row['contactPerson'];?>" required/> <br><br>
	Contact Number: <input name =   "contactpersonnumber" type= "text" value = "<?php echo $row['contactPersonNumber'];?>" required/> <br><br>
	Company Name: <input name =   "companyname" type= "text" value = "<?php echo $row['companyName'];?>" required/> <br><br>
	Company Address: <input name =   "companyaddress" type= "text" value = "<?php echo $row['companyAddress'];?>" required/> <br><br>
	Company Number: <input name =   "companynumber" type= "text" value = "<?php echo $row['companyNumber'];?>" required/> <br><br>
	<input type = "submit" value = "Edit Info" name = "edit" >
	</form>
	<input type = "button" value = "Back" onclick = "window.location.href = 'AddStudent.php'"> <br><br>
</center>	
</body>
</html>s