<?php
	include('Connection.php');
	mysqli_query($conn, "DELETE FROM student WHERE studentId = '".$_GET['studentid']."'");
	echo'<script type="text/javascript"> window.alert ("RECORD DELETED"); window.location.href="Viewer.php"; </script>';



?>