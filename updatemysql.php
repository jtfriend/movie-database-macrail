<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" � la place de "mysql" qui est obsol�te.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e param�tre si vous avez mis un mot de passe � root
*/
$mysqli = mysqli_connect('127.0.0.1', 'root', 'password', 'movie_database');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
?>
<?php
// 2.Database Query
  $id = 5;
  $title = "Pulp Fiction";
  $genre = "Drama";
  $age_rating = 18;

  $query = "UPDATE movies SET title = '{$title}'
            WHERE id =  {$id}";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  if ($result && mysqli_affected_rows($mysqli) == 1)
  {
    echo ("Updated data");
    echo "<br />";
  }
  else
  {
    die("Database query failed." . mysqli_error($mysqli));
  }

?>

<?php
$mysqli->close();
?>
