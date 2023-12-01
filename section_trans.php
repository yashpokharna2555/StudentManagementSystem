 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$id= $_POST['SECTION_ID'];
						$fname= $_POST['NAME'];
					    $lname= $_POST['COURSE_ID'];
						$gender= $_POST['SCHEDULE_ID'];
						$dateofbirth= $_POST['INSTRUCTION_ID'];
						
						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO section
								(SECTION_ID,NAME,COURSE_ID,SCHEDULE_ID,INSTRUCTION_ID)
								VALUES ('".$id."','".$fname."','".$lname."','".$gender."','".$dateofbirth."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "section.php";
		</script>
                    </div>