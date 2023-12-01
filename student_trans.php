 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$fname= $_POST['FIRST_NAME'];
					    $lname= $_POST['Last_Name'];
						$em= $_POST['EMAIL'];
						$course= $_POST['course'];
						$lev= $_POST['level'];
						$stat= $_POST['status'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO student
								(STUDENT_ID, FIRST_NAME, Last_Name, EMAIL, COURSE_ID, level_id, Status_id)
								VALUES (NULL,'".$fname."','".$lname."','".$em."',".$course.",".$lev.",".$stat.")";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "homepage.php";
		</script>
                    </div>