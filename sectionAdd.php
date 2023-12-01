  <?php include'header.php' ;?>
  <?php include'connection.php' ;?>

  <div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header""> <h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body"  style="background-color: #009999;">


                        <form role="form" method="post" action="section_trans.php?action=add">
                            
                            <div class="card-body">
                              <div class="form-group">
                              <input class="form-control" placeholder="Section ID" name="SECTION_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Section Name" name="NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Course ID" name="COURSE_ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Schedule ID" name="SCHEDULE ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Instruction ID" name="INSTRUCTION_ID">
                            </div> 
                             
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

   

  </body>

</html>
