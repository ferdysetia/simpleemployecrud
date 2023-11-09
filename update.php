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
  <p>Update employe data in database :</p>
  <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="idemploye">Employe You Want to Update (ID) :</label>
      <input id="idemploye" type="text" name="userinputidemploye">
      <br><br>
    <label for="firstname">New Firstname :</label>
      <input id="firstname" type="text" name="userinputfirstname">
      <br><br>
    <label for="lastname">New Lastname :</label>
      <input id="lastname" type="text" name="userinputlastname">
      <br><br>
    <label for="department">New Department :</label>
      <select id="department" name="userinputdepartment">
        <option value="Production">Production</option>
        <option value="Warehouse">Warehouse</option>
        <option value="HR">HR</option>
        <option value="Engineering">Engineering</option>
      </select>
      <br><br>
    <label for="joindate">New Join Date :</label>
      <input id="joindate" type="date" name="userjoindate">
      <br><br>

    <input type="submit">
    <br><br>
  </form>
</section>

<section>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $empidemploye = $_POST["userinputidemploye"];
        $empfirstname = $_POST["userinputfirstname"];
        $emplastname = $_POST["userinputlastname"];
        $empdepartment = $_POST["userinputdepartment"];
        $empjoindate = $_POST["userjoindate"];

        $sql1 = "UPDATE employe 
                SET firstname = '$empfirstname', lastname = '$emplastname', department = '$empdepartment', joindate = '$empjoindate'
                WHERE idemp = $empidemploye";
        
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            echo "<p>Updated record ($empidemploye - $empfirstname $emplastname) successfully.</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }

        $sql2 = "SELECT * FROM employe WHERE idemp = $empidemploye";
        
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            echo "<table>";
            echo "<tr>
                    <th>Submit Date</th>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Department</th>
                    <th>Join Date</th>
                  </tr>";
            while ($row = mysqli_fetch_assoc($result2)) {
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