
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
  $query = "SELECT * FROM admins";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php include("/includes/header.php"); ?>
<script>
    clearInputBoxes()
    {
      document.getElementById("add_admin").reset();
    }


</script>
    <div id = "main">
      <div id = "navigation">
        <body onload="clearInputBoxes();">

        <ul>
          <li><a href="manage_admin.php">Manage Admins</a></li>
        </ul>
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
          while($row = mysqli_fetch_assoc($result))
          {
             //echo $row["id"] . "<br />";
             //echo $row["title"] . "<br />";
             //echo $row["genre"] . "<br />";
             //echo $row["age_rating"] . "<br />";
             //echo "<hr />";
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>

      </div>
      <div id = "page">
        <h2>Add admin</h2>
        <form autocomplete="off" action="admin_added.php" id="add_admin" method ="post">
          username: <input type="text" name="username" value="" autocomplete="off" required><br>
          password: <input type="password" name="password" value="" autocomplete="off" required><br>
          <input type="submit" value="Submit"/>
        </form>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
