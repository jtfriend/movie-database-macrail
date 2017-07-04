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
?>
