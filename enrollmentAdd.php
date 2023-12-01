<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header"><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body" style="background-color: #009999;">
                 

                        <form role="form" method="post" action="enrollment_trans.php?action=add">
                            
                            <div class="form-group">
                                <p> Student: </p>
                            <input class="form-control" type="text" name="STUDENT">
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
                            <input class="form-control" type="Date" name="DATE_ENROLLED">
                            </div>
                           
                            <button type="submit" class="btn btn-default"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-default"> <h6> Clear </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>