<?php require_once("/includes/functions.php"); ?>
<?php require_once("/includes/db_connection.php"); ?>
<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
  $id =$_POST["id"];

  /*if(!$result)
  {
    redirect_to(manange_admin.php);
  }*/


  $query = "DELETE FROM admins
            WHERE id =  {$id} LIMIT 1";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);


  redirect_to("manage_admin.php");
  exit;
?>
