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
        </ul> 
    </div>
    

    <div class="container">
        <div class="input">
            <img src="Login-page-character1.png" alt="Admin png">
            <div class="inputs">
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="text" placeholder="Semester" name="semester" required>
                    <input type="number" placeholder="Roll No." name="rollno" required>
                    <input type="tel" placeholder="Mobile No" name="number" required>
                    <textarea name="problem" id="" cols="30" rows="10"  placeholder="Problem Description"></textarea><br>
                    <input type="submit" value="Submit" id="button">

                </form>
                

            </div>


        </div>
    </div>

    <?php
   


    if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_REQUEST['name'];
    $semester = $_REQUEST['semester'];
    $rollno = $_REQUEST['rollno'];
    $number = $_REQUEST['number'];
    $problem = $_REQUEST['problem'];

    $sql= "INSERT INTO feedback (name,semester, rollno, number, problem) VALUES ('$name', '$semester', '$rollno','$number', '$problem')";
    if (mysqli_query($conn, $sql)) {
        echo "File uploaded successfully.";
    }
    
    }
?>
</body>
</html>