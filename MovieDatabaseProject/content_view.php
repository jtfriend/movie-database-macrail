
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
$result = findAllMovies();

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
        <h2>Movies</h2>
        <table>
          <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Age Rating</th>
          </tr>
          <tr>
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
          while($row = mysqli_fetch_assoc($result))
          {
            ?>

                <td><?php echo $row["title"] . "<br />";?></td>
                <td><?php echo $row["genre"] . "<br />";?></td>
                <td><?php echo $row["age_rating"] . "<br />";?></td>
              </tr>
        <?php
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>
      </table>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
