<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header""><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body" style="background-color: #009999;">
                 

                        <form role="form" method="post" action="schedule_trans.php?action=add">
                            
                            <div class="form-group">
                                <p> DAY: </p>
                            <input class="form-control" type="date" name="DAY">
                            </div>
                            <div class="form-group">
                                <p> START TIME: </p>
                            <input class="form-control" type="time" name="START_TIME">
                            </div>
                            <div class="form-group">
                                <p> END TIME: </p>
                            <input class="form-control" type="time" name="END_TIME">
                            </div>
                           
                            <button type="submit" class="btn btn-default"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-default"> <h6> Clear </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>