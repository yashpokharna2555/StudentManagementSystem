<?php
include('connection.php');
include('topnav.php'); 
?>

<body>
<?php
if (!isset($_GET['do']) || $_GET['do'] != 1) {
switch ($_GET['type']) {
case 'schedule':
$query = 'DELETE FROM schedule
WHERE
schedule_id = ' . $_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));					
?>
<script type="text/javascript">
alert("Successfully Deleted!");
window.location = "schedule.php";
</script>				
				
<?php
//break;
}
}
?>

</body>