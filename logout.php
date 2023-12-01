<?php
require 'connection.php';
require 'session.php';

session_destroy();
?>
<script type="text/javascript">
	alert("Successfully logout!");
	window.location = "login.php";
</script>
