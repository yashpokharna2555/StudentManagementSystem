 <?php include'topnav.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
					    $sn= $_POST['status_name'];
					
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO status
								(Status_id, status_name)
								VALUES (NULL,'".$sn."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "status.php";
		</script>
                    </div>