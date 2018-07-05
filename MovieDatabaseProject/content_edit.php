
<?php require_once("/includes/db_connection.php"); ?>
<?php require_once("/includes/functions.php"); ?>

<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 2.Database Query
  $query = "SELECT * FROM movies";
  $result = mysqli_query($mysqli, $query);
  // Test if there is Database
  confirmQuery($result);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

<?php include("/includes/header.php"); ?>
    <div id = "main">
      <div id = "navigation">
        <ul>
          <li><a href="manage_content.php">Manage Movies</a></li>
        </ul>
        <?php
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          // 3. Use returned data
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>

      </div>
      <div id = "page">
        <h2>Edit</h2>
        <head>
        <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","getfilms.php?title="+str,true);
                xmlhttp.send();
            }
        }
        </script>
        </head>
        <body>
        <form>
        <select name="users" onchange="showUser(this.value)">
          <option value="">Select a movie</option>
          <?php
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['title'] ."'>" . $row['title'] ."</option>";
          }
          ?>
        </select>

        </form>
        <div id="txtHint"><b></b></div>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
