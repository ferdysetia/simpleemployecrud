<?php
  date_default_timezone_set("Asia/Jakarta");
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_1";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
  } else {
    echo "<p>Database connected successfully, last connect : " . date("Y-m-d H:i:s") . "</p>";
  }
?>