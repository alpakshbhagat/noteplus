<?php
require "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Admin.css">
    <title>Admin Login</title>
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <h3>NotePlus</h3>
        <div class="wrapper">
            <div class="dash dash1"></div>
            <div class="dash dash2"></div>
            <div class="dash dash3"></div>
        </div>
        <ul class="nav-menu">
            <li class="nav-items"><a href="index.php" class="nav-links">Home</a></li>
            <li class="nav-items"><a href="notes.php" class="nav-links">Notes</a></li>
            <li class="nav-items"><a href="about.php" class="nav-links">About</a></li>
            <li class="nav-items"><a href="contact.php" class="nav-links">Contact</a></li>
            <li class="nav-items"><a href="admin.php" class="nav-links">Admin</a></li>
        </ul> 
    </div>
    

    <div class="container">
        <div class="input">
            <img src="Login-page-character1.png" alt="Admin png">
            <div class="inputs">
                
            <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Name</th>
        <th scope="col">Semester</th>
        <th scope="col">Roll No.</th>
        <th scope="col">Contact</th>
        <th scope="col">Issue</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    $i= 0;
      $abc = "SELECT * FROM `feedback`";
      $res = mysqli_query($conn, $abc);
      while($row = mysqli_fetch_array($res)){
        $i++;
        echo "<tr>
        <th scope='row'>$i</th>
        <td>".$row['name']."</td>
        <td>".$row['semester']."</td>
        <td>".$row['rollno']."</td>
        <td>".$row['number']."</td>
        <td>".$row['problem']."</td>
       
      </tr>";
      }
    ?>
    </tbody>
  </table>


            </div>


        </div>
    </div>


</body>
</html>