

<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>
<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">

      </div>
      <div id = "page">
        <h2>Login</h2>
<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query


if (isset($_POST["username"]) && isset($_POST["password"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $username = mysqli_real_escape_string($mysqli, $username);
  $password = mysqli_real_escape_string($mysqli, $password);
  $query = "SELECT * FROM admins WHERE username = '{$username}' LIMIT 1";

  $result = mysqli_query($mysqli, $query);

  confirmQuery($result);
  while($row = mysqli_fetch_array($result))
  {
      $database_hash = $row['password'];
  }
  //echo "<br>" ."Password typed" . $password;
  $recieved_password = passwordEncrypt($password);
  //echo "<br>" ."Password encrypted". $recieved_password;

  if(isset($database_hash))
  {
    //echo "<br>" ."Password from Database". $database_hash;
    if ($recieved_password == $database_hash)
    {
        redirect_to("admin.php");
        exit;
    }
    else{
      echo "Incorrect Login";
    }
  }else {
    echo "No username found";
  }
  ?>
  <?php
  while($row = mysqli_fetch_array($result)) {
      //echo $row['title'];
      //$username = $row['username'];
      //$title = mysqli_real_escape_string($mysqli, $row['title']);
      //echo $row['genre'];
      $password = $row['password'];
      //echo $row['age_rating'];
      //$id = $row['id'];
  }

}
  ?>
<form action="login.php" method ="post">
  Username: <input type="text" name="username" value =""><br>
  Password: <input type="password" name="password" value =""><br>
  <input type="hidden" name="id" value =""><br>
  <input type="submit" value="Login">
</form>
</div>
<?php include("/includes/footer.php"); ?>
