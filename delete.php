<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Employe CRUD Management</title>
  <meta charset="utf-8">
  <meta name="description" content="Employe CRUD Management">
  <meta name="keywords" content="Employe CRUD Management">
  <meta name="author" content="Ferdy Setia">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/index.css">
  <style>
    
  </style>
</head>
<body>

<header>
  <h1>Employe CRUD Management</h1>
  <p><a href="http://localhost/simpleemployecrud/">HOME</a> - <a href="create.php">CREATE</a> - <a href="read.php">READ</a> - <a href="update.php">UPDATE</a> - <a href="delete.php">DELETE</a></p>
</header>
<hr>

<section>
  <?php include 'dbconnect.php'; ?>
  <p>Delete employe data in database :</p>
  <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="idemploye">Employe you want to delete (ID) :</label>
      <input id="idemploye" type="text" name="userinputidemploye">
      <br><br>

    <input type="submit">
    <br><br>
  </form>
</section>

<section>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $empidemploye = $_POST["userinputidemploye"];

        $sql1 = "DELETE FROM employe WHERE idemp = $empidemploye";
        
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            echo "<p>Delete record ($empidemploye) successfully.</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }
  ?>
</section>
<hr>

<section>
  <p>Read all employe data in database :</p>

  <?php 
    $sql = "SELECT * FROM employe;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>Submit Date</th>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Department</th>
                <th>Join Date</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["submitdate"] . "</td>";
            echo "<td>" . $row["idemp"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "<td>" . $row["department"] . "</td>";
            echo "<td>" . $row["joindate"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
  ?>
</section>

<script>

</script>
<noscript>Sorry, your browser doesn't support JavaScript or has JavaScript turned off</noscript>
</body>
</html>