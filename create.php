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
  <p>Submit new employe data to database :</p>

  <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="firstname">Firstname :</label>
      <input id="firstname" type="text" name="userinputfirstname">
      <br><br>
    <label for="lastname">Lastname :</label>
      <input id="lastname" type="text" name="userinputlastname">
      <br><br>
    <label for="department">Department :</label>
      <select id="department" name="userinputdepartment">
        <option value="Production">Production</option>
        <option value="Warehouse">Warehouse</option>
        <option value="HR">HR</option>
        <option value="Engineering">Engineering</option>
      </select>
      <br><br>
    <label for="joindate">Join Date :</label>
      <input id="joindate" type="date" name="userjoindate">
      <br><br>

    <input type="submit">
  </form>
<section>
<hr>

<section>
  <?php
    date_default_timezone_set("Asia/Jakarta");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $empsubmitdate = date("Y-m-d H:i:s");
      $empidemp = date("ymHis");
      $empfirstname = $_POST["userinputfirstname"];
      $emplastname = $_POST["userinputlastname"];
      $empdepartment = $_POST["userinputdepartment"];
      $empjoindate = $_POST["userjoindate"];
      
      $sql = "INSERT INTO employe (submitdate, idemp, firstname, lastname, department, joindate) 
              VALUES ('$empsubmitdate', '$empidemp', '$empfirstname', '$emplastname', '$empdepartment', '$empjoindate')";
      
      if (mysqli_query($conn, $sql)) {
        echo "<p>New record ($empidemp - $empfirstname $emplastname) created successfully.</p>";
      } else {
        echo "<p>Error: " . $sql . mysqli_error($conn) . "</p>";
      }
      
      mysqli_close($conn);
    }
  ?>
</section>

<script>

</script>
<noscript>Sorry, your browser doesn't support JavaScript or has JavaScript turned off</noscript>
</body>
</html>