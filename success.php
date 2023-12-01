<?php
require('connection.php');
session_start();


    $user = trim($_POST['user']);
    $upass = trim($_POST['pass']);
    $h_pass = MD5($upass);
      //create some sql statement
      $sql = "SELECT * FROM `admin` WHERE `user` = '" .$user. "' AND `password` = '" . $h_pass . "' ";
      $result = $db->query($sql);

        //get the number of result based n the sql statement
        //check the number of result, if equal to one
        //If theres a result
            if($result->num_rows > 0){
              //store the result to a array and passed to variable found_user
              $found_user = mysqli_fetch_array($result);

              //fill the result to session variable
              $_SESSION['MEMBER_ID'] = $found_user['id'];
              $_SESSION['fname'] = $found_user['fname'];
              $_SESSION['lname'] = $found_user['lname'];
              $_SESSION['position'] = $found_user['Position'];
              if ($_SESSION['position']=='ADMIN') {
                # code...
                ?> <script type="text/javascript">
                      //then it will be redirected to index.php
                      window.location = "index.php"
                </script>
                <?php
             }else{
                  ?> <script type="text/javascript">
                      //then it will be redirected to index.ph
                      window.location = "homepage.php"
                </script>
                <?php
             }

            }else{
      //if theres no result
            ?> <script type="text/javascript">
              alert("Username or Password Not Registered! Contact Your administrator.");
              window.location = "login.php";
              </script>
            <?php
            }
          
$db->close();
?>