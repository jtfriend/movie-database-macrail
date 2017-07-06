<!DOCTYPE html>
<html>
<body>


<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>
<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">

      </div>
      <div id = "page">
        <h2>Manage Admin</h2>
<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
$username = $_POST["username"];

$username = mysqli_real_escape_string($mysqli, $username);
$query = "SELECT * FROM admins WHERE username = '{$username}' LIMIT 1";

$result = mysqli_query($mysqli, $query);

  confirmQuery($result);

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>
<?php
while($row = mysqli_fetch_array($result)) {
    //echo $row['title'];
    $username = $row['username'];
    //$title = mysqli_real_escape_string($mysqli, $row['title']);
    //echo $row['genre'];
    $password = $row['password'];
    //echo $row['age_rating'];
    $id = $row['id'];
}
?>
<form action="admin_edited.php" method ="post">
  Username: <input type="text" name="username" value ="<?php echo $username?>"><br>
  Password: <input type="password" name="password" value =""><br>
  <input type="hidden" name="id" value ="<?php echo $id?>"><br>
  <input type="submit" value="Submit changes">
</form>

</body>
</html>
