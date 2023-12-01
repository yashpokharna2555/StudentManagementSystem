 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
            
						$name= $_POST['NAME'];
						$desc= $_POST['DESCRIPTION'];
						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO course
								(COURSE_ID, NAME, DESCRIPTION)
								VALUES ('NULL','".$name."','".$desc."')";
								mysqli_query($db,$query)or die(mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "course.php";
		</script>
                    </div>