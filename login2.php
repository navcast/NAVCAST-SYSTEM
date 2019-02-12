<?php 
	include('Connection.php');

	
	
	if(isset($_POST['login'])){ //button is set?
		$Username = $_POST ['username'];
		$Password = $_POST ['password'];
	

		$query = "SELECT * FROM accounts WHERE Username = '$Username' AND  Password = '$Password'";
			
		
		if($conn->query($query)=== TRUE){
			echo'<script> alert("Login successfully.");';
			echo'window.location.href="AddStudent.php";';
			echo'</script>';
			
		}else{
			echo"Error: ". $query . "<br>" . $conn->error;	
		}
		$conn->close();
	}
	
	
?>