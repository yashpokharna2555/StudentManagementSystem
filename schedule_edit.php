<?php
include('connection.php');
include('topnav.php');
?>

<?php 
$query = 'SELECT * FROM schedule
WHERE
schedule_id ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['schedule_id'];
$i= $row['DAY'];
$a= $row['START_TIME'];
$b= $row['END_TIME'];
} 
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Records</div>
<div class="card-body">
<form role="form" method="post" action="schedule_edit1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="schedule_id" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="DAY" name="DAY" value="<?php echo $i; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="START TIME" name="START_TIME" value="<?php echo $a; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="END TIME" name="END_TIME" value="<?php echo $b; ?>">
</div>
</div>
<button type="submit" class="btn btn-primary btn-block">Update Record</button>                         
</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</body>