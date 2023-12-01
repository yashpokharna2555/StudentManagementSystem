<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$fn = $_POST['NAME'];
		    $ln = $_POST['COURSE_ID'];
			$gender= $_POST['SCHEDULE_ID'];
			$dateofbirth = $_POST['INSTRUCTION_ID'];
			
			
		
	 			$query = 'UPDATE section set NAME ="'.$fn.'",
					COURSE_ID ="'.$ln.'",SCHEDULE_ID="'.$gender.'",
					INSTRUCTION_ID="'.$dateofbirth.'" WHERE
					SECTION_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "section.php";
		</script>
 <?php include 'footer.php'; ?>