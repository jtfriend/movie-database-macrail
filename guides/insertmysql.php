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
  $title = "Pulp Fiction's";
  $genre = "Drama";
  $age_rating = 18;
  $title = mysqli_real_escape_string($mysqli, $title);

  $query = "INSERT INTO movies (title, genre, age_rating)
            VALUES ('{$title}', '{$genre}', '{$age_rating}')";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  if (!$result)
  {
    die("Database query failed." . mysqli_error($mysqli));
  }
  else
  {
    echo ("Added data");
    echo "<br />";
  }

?>

<?php
$mysqli->close();
?>
