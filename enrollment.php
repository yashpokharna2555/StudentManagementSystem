<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Enrollment Records <br></br>
             Add New <a></a>
            
              <a href="enrollmentAdd.php?action=add" type="button" class="btn btn-xs fa fa-user-plus"></a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ENROLMENT ID</th>
                                        <th>STUDENT</th>
                                        <th>COURSE</th>
                                        <th>YEAR LEVEL</th>
                                        <th>STATUS</th>
                                        <th>DATE ENROLLED</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT a.`ENROLLMENT_ID`, a.`STUDENT`, b.`NAME`, c.`year_level`, d.`status_name`,a.`DATE_ENROLLED` FROM `enrollment`a, `course`b, `level`c, `status`d where a.`COURSE_ID`=b.`COURSE_ID` and a.`level_id`=c.`level_id` AND a.`Status_id`=d.`Status_id`';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ENROLLMENT_ID'].'</td>';
                            echo '<td>'. $row['STUDENT'].'</td>';
                            echo '<td>'. $row['NAME'].'</td>';
                            echo '<td>'. $row['year_level'].'</td>';
                            echo '<td>'. $row['status_name'].'</td>';
                            echo '<td>'. $row['DATE_ENROLLED'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="enrollment_edit.php?action=edit & id='.$row['ENROLLMENT_ID'] . '"> </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="enrollmentDel.php?type=enrollment&delete & id=' . $row['ENROLLMENT_ID'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>