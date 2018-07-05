<?php
  function redirect_to($new_location)
  {
    header("Location: " . $new_location);
    exit;
  }

  function confirmQuery($result_set)
  {
    if (!$result_set)
    {
      die("Database query failed.");
    }
    else
    {
      //echo (", Database query passed!");
      //echo "<br />";
    }
  }

  function findAllMovies()
  {
    global $mysqli;
    $query = "SELECT * FROM movies ORDER BY title";
    $result = mysqli_query($mysqli, $query);
    // Test if there is Database
    confirmQuery($result);
    return $result;
  }

  function passwordEncrypt($password_text)
  {
    //blow fish 2y, 10 number of times
    $hash_format = "$2y$10$";
    $salt = "Salt22CharactersOrMore";

    $format_and_salt = $hash_format . $salt;

    $hash = crypt($password_text, $format_and_salt);

    return $hash;

  }


?>
