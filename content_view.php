
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
$result = findAllMovies();

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">
        <ul>
          <li><a href="manage_content.php">Manage Movies</a></li>
        </ul>
      </div>
      <div id = "page">
        <h2>Admin Menu</h2>
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
          while($row = mysqli_fetch_assoc($result))
          {
             //echo $row["id"] . "<br />";
             echo $row["title"] . "<br />";
             echo $row["genre"] . "<br />";
             echo $row["age_rating"] . "<br />";
             echo "<hr />";
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>

      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
