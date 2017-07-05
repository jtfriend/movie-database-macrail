<?php

  function confirmQuery($result_set)
  {
    if (!$result_set)
    {
      die("Database query failed.");
    }
    else
    {
      echo (", Database query passed!");
      echo "<br />";
    }
  }

  function findAllMovies()
  {
    global $mysqli;
    $query = "SELECT * FROM movies";
    $result = mysqli_query($mysqli, $query);
    // Test if there is Database
    confirmQuery($result);
    return $result;
  }
?>
