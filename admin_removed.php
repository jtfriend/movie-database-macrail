
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>



<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query

  $username = $_POST["username"];
  $password = $_POST["password"];
  $id = $_POST["id"];
  $username = mysqli_real_escape_string($mysqli, $username);
  $password = mysqli_real_escape_string($mysqli, $password);

  $query = "DELETE FROM movies
            WHERE id =  {$id} LIMIT 1";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">
        <ul>
          <li><a href="manage_admin.php">Manage Admin</a></li>
        </ul>

      </div>
      <div id = "page">
        <h2>Added Admin</h2>
        Added <?php echo $_POST["username"]; ?><br>
      </div>
    </div>
<?php include("/includes/footer.php"); ?>
