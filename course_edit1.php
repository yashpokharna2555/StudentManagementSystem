<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['NAME'];
			$desc = $_POST['DESCRIPTION'];
			 	
			
		
			$query = 'UPDATE course set NAME ="'.$name.'", 
					DESCRIPTION="'.$desc.'" WHERE
					COURSE_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "course.php";
		</script>
 <?php include 'footer.php'; ?>