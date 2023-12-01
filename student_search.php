
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Check Record</h2> </div>
<div class="card-body">

<?php
$query = 'SELECT * FROM student
              WHERE
              STUDENT_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['STUDENT_ID'];
                $i= $row['FIRST_NAME'];
                $a=$row['Last_Name'];
                $b=$row['EMAIL'];
                $c=$row['COURSE_ID'];
                $d=$row['SECTION_ID'];
                $e=$row['DEPARTMENT_ID'];
                $f=$row['ENROLLMENT_ID'];
              }
              
              $id = $_GET['id'];
         
?>


                        <form role="form" method="post" action="student.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="FIRST_NAME" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="Last_Name" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="EMAIL" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="COURSE ID" name="COURSE_ID" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Section ID" name="SECTION_ID" value="<?php echo $d; ?>">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Department ID" name="DEPARTMENT_ID" value="<?php echo $e; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Enrollment ID" name="ENROLLMENT_ID" value="<?php echo $d; ?>">
                            </div> 
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

