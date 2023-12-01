 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		
					    $d= $_POST['DAY'];
					    $st= $_POST['START_TIME'];
					    $et= $_POST['END_TIME'];
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO schedule
								(schedule_id,DAY,START_TIME,END_TIME)
								VALUES ('Null', '".$d."', '".$st."', '".$et."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "schedule.php";
		</script>
                    </div>