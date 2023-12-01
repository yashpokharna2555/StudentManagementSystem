<?php
include('connection.php');
include('topnav.php'); 
?>

<body>
<?php
if (!isset($_GET['do']) || $_GET['do'] != 1) {
switch ($_GET['type']) {
case 'level':
$query = 'DELETE FROM level
WHERE
level_id = ' . $_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));					
?>
<script type="text/javascript">
alert("Successfully Deleted!");
window.location = "level.php";
</script>				
				
<?php
//break;
}
}
?>

</body>