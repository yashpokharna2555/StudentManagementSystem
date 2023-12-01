<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Schedule Records <br></br>
              Add New <a></a>
              <a href="schedule_add.php?action=add" type="button" class="btn btn-xs  fa fa-user-plus"></a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>schedule ID</th> 
                                        <th>DATE</th>
                                        <th>START TIME</th>
                                        <th>END TIME</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM schedule';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['schedule_id'].'</td>';
                            echo '<td>'. $row['DAY'].'</td>';
                            echo '<td>'. $row['START_TIME'].'</td>';
                            echo '<td>'. $row['END_TIME'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="schedule_edit.php?action=edit & id='.$row['schedule_id'] . '"> </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="schedule_del.php?type=schedule&delete & id=' . $row['schedule_id'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>