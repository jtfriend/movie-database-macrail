
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
          while($row = mysqli_fetch_assoc($result))
          {
             //echo $row["id"] . "<br />";
             //echo $row["title"] . "<br />";
             //echo $row["genre"] . "<br />";
             //echo $row["age_rating"] . "<br />";
             //echo "<hr />";
          }
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>

      </div>
      <div id = "page">
        <h2>Edit Movie</h2>
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
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
        }
        </script>
        </head>
        <body>

        <form>
        <select name="users" onchange="showUser(this.value)">
          <option value="">Select a person:</option>
          <option value="1">Peter Griffin</option>
          <option value="2">Lois Griffin</option>
          <option value="3">Joseph Swanson</option>
          <option value="4">Glenn Quagmire</option>
          </select>
        </form>
        <br>
        <div id="txtHint"><b>Person info will be listed here...</b></div>
      </div>
    </div>
    <?php
    // 4. Release returned Database
    mysqli_free_result($result);
     ?>
<?php include("/includes/footer.php"); ?>
