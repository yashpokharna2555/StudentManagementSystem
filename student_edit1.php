<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$fn = $_POST['FIRST_NAME'];
		    $ln = $_POST['Last_Name'];
			$eml= $_POST['EMAIL'];
			$cid = $_POST['COURSE_ID'];
			$sid= $_POST['level_id'];
			$eid= $_POST['Status_id'];
			
		
	 			$query = 'UPDATE student set FIRST_NAME ="'.$fn.'",
					Last_Name ="'.$ln.'", EMAIL="'.$eml.'",
					COURSE_ID="'.$cid.'",level_id="'.$sid.'", 
					Status_id="'.$eid.'" WHERE
					STUDENT_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "student.php";
		</script>
 <?php include 'footer.php'; ?>