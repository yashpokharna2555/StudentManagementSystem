<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header""><h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body" style="background-color: #009999;">
                 

                        <form role="form" method="post" action="leveltrans.php?action=add">
                            
                            <div class="form-group">
                                <p> Year Level: </p>
                            <input class="form-control" type="text" name="year_level">
                            </div>
                           
                            <button type="submit" class="btn btn-default"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-default"> <h6> Clear </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>