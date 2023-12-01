
<?php
          
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'status':
					$query = 'DELETE FROM status
							WHERE
							Status_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " status.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>