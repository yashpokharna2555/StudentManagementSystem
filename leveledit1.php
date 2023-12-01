<?php
include('connection.php');
include('topnav.php');
?>

<body>
<?php
$zz = $_POST['level_id']; 
$yl = $_POST['year_level'];

$query = 'UPDATE level set year_level ="'.$yl.'" WHERE
level_id ="'.$zz.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "level.php";
</script>
 </body>