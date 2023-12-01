 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		
					    $yl= $_POST['year_level'];
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO level
								(level_id,year_level)
								VALUES ('Null', '".$yl."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "level.php";
		</script>
                    </div>