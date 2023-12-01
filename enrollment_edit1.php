<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['en_id'];
			$st = $_POST['STUDENT'];
		    $co = $_POST['course'];
		    $le = $_POST['level'];
		    $sta = $_POST['status'];
		    $de = $_POST['DATE_ENROLLED'];
		
	 			$query = "UPDATE enrollment set STUDENT ='".$st."',
					COURSE_ID ='".$co."', level_id ='".$le."', Status_id ='".$sta."', DATE_ENROLLED ='".$de."' WHERE
					ENROLLMENT_ID ='".$zz."'";
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "enrollment.php";
		</script>
 <?php include 'footer.php'; ?>