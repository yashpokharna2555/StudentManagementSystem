<?php
include('connection.php');
include('topnav.php');
?>

<?php 
$query = 'SELECT * FROM level
WHERE
level_id ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['level_id'];
$i= $row['year_level'];
} 
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Records</div>
<div class="card-body">
<form role="form" method="post" action="leveledit1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="level_id" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Year Level" name="year_level" value="<?php echo $i; ?>">
</div>
</div>
<button type="submit" class="btn btn-primary btn-block">Update Record</button>                         
</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</body>