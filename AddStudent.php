<?php
	include('Connection.php');
	
	date_default_timezone_set('Asia/Manila');
	
	
	if(isset($_POST['add'])){ //button is set?
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
		$contactPersonNumber = $_POST ['contactnumber'];
		$companyName = $_POST ['companyname'];
		$companyAddress = $_POST ['companyaddress'];
		$companyNumber = $_POST ['companynumber'];
		$studentId = 0;
		
		 
		//add the item
		$query = "INSERT INTO student VALUES('$studentId', '$lastName', '$firstName', '$middleName', '$permanentAdd', '$dateOfbirth', '$contactNumber', '$positionRank', '$emailAddress', '$idPresented', '$contactPerson', '$contactPersonNumber', '$companyName', '$companyAddress', '$companyNumber')";
		
		if($conn->query($query)=== TRUE){
			echo'<script> alert("Student added successfully.");';
			echo'window.location.href="AddStudent.php";';
			echo'</script>';
			
		}else{
			echo"Error: ". $query . "<br>" . $conn->error;	
		}
		$conn->close();
	}
?> 

<html>
<head></head>
<!-- Header -->
<?php 
    require_once ('main-header.php');
	
?>
<body>
<center>
        <h1>Student Information</h1>
        <div class="container-fluid">
        <form name = "addform" action = "AddStudent.php" method="POST" class="student-form">
            <input name = "studentid" size="100" type="text" disabled hidden/>
            <div class="row">
                <div class="col-md-6">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="date" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <label>Date</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="regnum">
                    <label>Registration Number</label>
                   
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4"> 
                    <input type="text" class="form-control" name="lastname" required>
                    <label>Last Name</label>
                </div>
                <div class="col-md-4"> 
                    <input type="text" class="form-control" name="firstname" required>
                    <label>First Name</label>
                </div>
                <div class="col-md-4"> 
                    <input type="text" class="form-control" name="middlename" required>
                    <label>Middle Name</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="address" required>
                    <label>Permanent Address</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="birthday" required>
                         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <label>Date of Birth</label>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="number" required>
                    <label>Contact Number</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">                    
                    <input type="text" class="form-control" name="position" required>
                    <label>Position / Rank</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="email" required>
                    <label>Email Address</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="idpresented" required>
                    <label>ID Presented / Id Number</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="contactperson" required>
                    <label>Contact Person in case of emergency</label>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="contactnumber" required>
                    <label>Contact Number</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="companyname" required>
                    <label>Company Name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="companyaddress" required>
                    <label>Company Address</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="companynumber" required>
                    <label>Contact number of company</label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-primary btn-block" name="add">
                </div>
            </div>
        </form>
        <br><br>
<!--        <input type = "button" value = "Back" onclick = "window.location.href = 'Viewer.php'">-->
        </div>
</center>
</body>
<!-- Footer -->
<?php 
    require_once ('main-footer.php');
?>
</html>

