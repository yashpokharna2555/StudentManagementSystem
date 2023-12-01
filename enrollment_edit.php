<?php
include('connection.php');
include('topnav.php');
?>

<?php 
$query = 'SELECT * FROM enrollment
WHERE
ENROLLMENT_ID ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['ENROLLMENT_ID'];
$i= $row['STUDENT'];
$a= $row['COURSE_ID'];
$b= $row['level_id'];
$c= $row['Status_id'];
$d= $row['DATE_ENROLLED'];
} 
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Records</div>
<div class="card-body">
<form role="form" method="post" action="enrollment_edit1.php">
                            
<div class="form-group">
                                <p> Student: </p>
                                <input type="hidden" name="en_id" value="<?php echo $zz; ?>">
                            <input class="form-control" placeholder="STUDENT" type="text" name="STUDENT" value="<?php echo $i; ?>">
                            </div>

                           <?php
                                $sqll = "SELECT * FROM `course`";
                                $res = mysqli_query($db,$sqll) or die ("Error: $sqll");

                                $course ="<select class='form-control' name='course' required>
                                            <option value='' disabled selected hidden>Select Course</option>";
                                while($row = mysqli_fetch_assoc($res)){
                                $course .="<option value='".$row['COURSE_ID']."'>".$row['NAME']."</option>";
                                }
                                $course .="</select>";
                          ?>
                            <div class="form-group">
                              <?php echo $course; ?>
                            </div> 

                            <?php
                                $queryy = "SELECT * FROM `level`";
                                $res2 = mysqli_query($db,$queryy) or die ("Error: $queryy");

                                $level ="<select class='form-control' name='level' required>
                                            <option value='' disabled selected hidden>Select Year Level</option>";
                                while($row = mysqli_fetch_assoc($res2)){
                                $level .="<option value='".$row['level_id']."'>".$row['year_level']."</option>";
                                }
                                $level .="</select>";
                          ?>
                            <div class="form-group">
                              <?php echo $level; ?>
                            </div> 

                            <?php
                                $queryyy = "SELECT * FROM `status`";
                                $res3 = mysqli_query($db,$queryyy) or die ("Error: $queryyy");

                                $status ="<select class='form-control' name='status' required>
                                            <option value='' disabled selected hidden>Select Status</option>";
                                while($row = mysqli_fetch_assoc($res3)){
                                $status .="<option value='".$row['Status_id']."'>".$row['status_name']."</option>";
                                }
                                $status .="</select>";
                          ?>
                           <div class="form-group">
                              <?php echo $status; ?>
                            </div> 

                            <div class="form-group">
                                <p> Date Enrolled: </p>
                            <input class="form-control" type="Date" name="DATE_ENROLLED" value="<?php echo $d; ?>">
                            </div>


<button type="submit" class="btn btn-primary btn-block">Update Record</button>                         
</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</body>