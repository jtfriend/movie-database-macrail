
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
        <ul>
          <li><a href="manage_content.php">Manage Movies</a></li>
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
        <h2>Add Movie</h2>
        <form action="content_added.php" method ="post">
          Title: <input type="text" name="title"><br>
          Genre: <input type="text" name="genre"><br>
          Age Rating: <input type="text" name="age_rating"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
