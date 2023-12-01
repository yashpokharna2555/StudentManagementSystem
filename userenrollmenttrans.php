 <?php //include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		//$id= $_POST['ENROLLMENT_ID'];
						$st= $_POST['STUDENT'];
					    $co= $_POST['course'];
					    $le= $_POST['level'];
					    $sta= $_POST['status'];
					    $de= $_POST['DATE_ENROLLED'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO enrollment
								(STUDENT,COURSE_ID,LEVEL_ID,Status_id,DATE_ENROLLED)
								VALUES ('".$st."','".$co."','".$le."','".$sta."','".$de."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "userenrollment.php";
		</script>
                    </div>