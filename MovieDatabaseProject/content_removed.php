
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>



<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query

  $query = "INSERT INTO movies  FROM movies"; //TO DO: Update~~~~~~~~
  $id = $_POST["id"];
  $title = $_POST["title"];
  $genre = $_POST["genre"];
  $age_rating = $_POST["age_rating"];
  $title = mysqli_real_escape_string($mysqli, $title);
  $genre = mysqli_real_escape_string($mysqli, $genre);

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
          <li><a href="manage_content.php">Manage Movies</a></li>
        </ul>

      </div>
      <div id = "page">
        <h2>Deleted Movie</h2>
        Deleted <?php echo $_POST["title"]; ?><br>
      </div>
    </div>
<?php include("/includes/footer.php"); ?>
