<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$fn = $_POST['status_name'];
		   
	 			$query = 'UPDATE status set status_name ="'.$fn.'", WHERE
					Stauts_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "status.php";
		</script>
 <?php include 'footer.php'; ?>