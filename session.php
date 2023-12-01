<?php
//before we store information of out member, we need to start frist the session

		session_start(); 

		//create a new function to check if the version variable member_id is not set
		function logged_in(){
			return isset($_SESSION['MEMBER_ID']);

		}
		//this function if seesion member is not set then it will be redirected to index.php
		function confirm_logged_in(){
			if (!logged_in()) {?>
				<script type="text/javascript">
						window.location = 'login.php';
				</script>

			<?php
			}
		}
?>