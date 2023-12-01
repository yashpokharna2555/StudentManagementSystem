<?php include 'connection.php';
include 'topnav.php'; ?>
 <div class="col-lg-12">
                        <div>
            <i class="fas fa-table"></i>

               Section Records <br></br>
                 <a>Add New</a>
      <a href="sectionAdd.php?action=add"  type="button" class="btn btn-xs  fa fa-user-plus"></a>
            </div>    
                          <br> </br>      
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>COURSE & SECTION</th>
                                        <th>SCHEDULE ID</th>
                                        <th>INSTRUCTION ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM section';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['NAME'].'</td>';
                            echo '<td>'. $row['COURSE_ID'].'</td>';
                            echo '<td>'. $row['SCHEDULE_ID'].'</td>';
                            echo '<td>'. $row['INSTRUCTION_ID'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="section_edit.php?action=edit & id='.$row['SECTION_ID'] . '"> </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="sectionDel.php?type=section&delete & id='.$row['SECTION_ID'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div><?php include 'footer.php'; ?>