<!DOCTYPE html>
<html>
<body>


<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
$title = $_GET["title"];
$title = mysqli_real_escape_string($mysqli, $title);
echo "<br>";
$query = "SELECT * FROM movies WHERE title = '{$title}'";

$result = mysqli_query($mysqli, $query);

  confirmQuery($result);

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
<?php
while($row = mysqli_fetch_array($result)) {
    //echo $row['title'];
    $title = $row['title'];
    //$title = mysqli_real_escape_string($mysqli, $row['title']);
    //echo $row['genre'];
    $genre = $row['genre'];
    //echo $row['age_rating'];
    $age_rating = $row['age_rating'];
    $id = $row['id'];
}
?>
<form action="content_removed.php" method ="post">
  Title: <input type="text" name="title" value ="<?php echo $title?>" disabled><br>
  Genre: <input type="text" name="genre" value ="<?php echo $genre?>" disabled><br>
  Age Rating: <input type="text" name="age_rating" value ="<?php echo $age_rating?>" disabled><br>
  <input type="hidden" name="id" value ="<?php echo $id?>"><br>
  <input type="submit" value="Delete movie">
  <a href="manage_content.php">Cancel</a>
</form>

</body>
</html>
