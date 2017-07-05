<!DOCTYPE html>
<html>
<body>


<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
$title = $_GET["title"];
echo "title" . $title;
$query = "SELECT * FROM movies WHERE title = '$title'";

$result = mysqli_query($mysqli, $query);

  confirmQuery($result);

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
<?php
while($row = mysqli_fetch_array($result)) {
    //echo $row['title'];
    $title = $row['title'];
    //echo $row['genre'];
    $genre = $row['genre'];
    //echo $row['age_rating'];
    $age_rating = $row['age_rating'];
}
?>
<form action="content_added.php" method ="post">
  Title: <input type="text" name="title" value ="<?php echo $title?>"><br>
  Genre: <input type="text" name="genre" value ="<?php echo $genre?>"><br>
  Age Rating: <input type="text" name="age_rating" value ="<?php echo $age_rating?>"><br>
  <input type="submit" value="Submit changes">
</form>

</body>
</html>
