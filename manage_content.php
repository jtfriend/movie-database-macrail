<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
  $query = "SELECT * FROM movies";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  if (!$result)
  {
    die("Database query failed.");
  }
  else
  {
    echo (", Database query passed!");
    echo "<br />";
  }
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
  $query = "SELECT * FROM movies";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
          while($row = mysqli_fetch_assoc($result))
          {
             echo $row["id"] . "<br />";
             echo $row["title"] . "<br />";
             echo $row["genre"] . "<br />";
             echo $row["age_rating"] . "<br />";
             echo "<hr />";
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>

      </div>
      <div id = "page">
        <h2>Content Menu</h2>
        <p>Welcome to the content area.</p>
        <?php echo "Hello World!"; ?><br />
        <ul>
          <li><a href="manage_content.php">Manage Movies</a></li>
          <li><a href="manage_admin.php">Manage Admin</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>

<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">
          &nbsp;
      </div>
      <div id = "page">
        <h2>Manage Content</h2>
        <p>Welcome to the content area.</p>
        <?php echo "Hello World!"; ?><br />
        <ul>
          <li><a href="manage_content.php">Manage Movies</a></li>
          <li><a href="manage_admin.php">Manage Admin</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
<?php include("/includes/footer.php"); ?>
