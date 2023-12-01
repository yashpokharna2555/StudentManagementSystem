<?php
include('connection.php');
include('topnav.php');
?>

<body>
<?php
$zz = $_POST['schedule_id']; 
$i = $_POST['DAY'];
$a = $_POST['START_TIME'];
$b = $_POST['END_TIME'];

$query = 'UPDATE schedule set DAY ="'.$i.'", START_TIME ="'.$a.'", END_TIME ="'.$b.'" WHERE
schedule_id ="'.$zz.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "schedule.php";
</script>
 </body>