
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
    <div id = "main">
      <div id = "navigation">

      </div>
      <div id = "page">
        <h2>Manage Admin</h2>

        <table>
          <tr>
            <th>Username</th>
            <th>Actions</th>
            <th></th>
          </tr>
          <tr>
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
          while($row = mysqli_fetch_assoc($result))
          {
            $id = $row["id"];
            $username = $row["username"];
            ?>
            <td> <?php echo $row["username"];?></td>
            <td>
              <form action="admin_edit.php" method ="post">
                      <input type="hidden" name="username" value ="<?php echo $username ?>">
                      <input type="submit" value="Edit">
              </form>
            </td>
            <td>
              <form action="admin_remove.php" method ="post" onclick="return confirm('Are you sure?')">
                      <input type="hidden" name="id" value ="<?php echo $id ?>">
                      <input type="submit" value="Delete">
              </form>
            </td>
          </tr>
        <?php
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>




        </table>
        <br>
        <a href="admin_add.php">Add new admin</a>
        <br>

        <a href="admin.php">Admin menu</a>




      </div>

    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
