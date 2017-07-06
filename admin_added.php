
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>



<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query

  $username = $_POST["username"];
  $password = $_POST["password"];
  $username = mysqli_real_escape_string($mysqli, $username);
  $password = mysqli_real_escape_string($mysqli, $password);

  $query = "INSERT INTO admins (username, password)
            VALUES ('{$username}', '{$password}')";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);

  redirect_to("manage_admin.php");
  exit;
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
