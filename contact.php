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
    <title>Contact Us</title>
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
<!-- footer -->
    <footer class="footer">
    <div class="one padding">
        <h2>Community</h2>
        <p>Join our community of students and teachers to get the best learning experience.</p>
        <p>&copy; All rights Reserved | <?php echo date("Y")?></p>
        
    </div>
    <div class="two padding">
        <a href="index.php">Home</a>
        <a href="notes.php">Notes</a>
        <a href="About.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="three padding">
        <div>
            <img src="github.png" alt="" class="imglog github">
            <img src="linkedin.png" alt="" class="imglogo">
            <img src="facebook.png" alt=""  class="secondlogo"  >
            <img src="instagram.png" alt=""  class="secondlogo">
        </div>
        
    </div>
</footer>
    <?php
   


    if($_SERVER['REQUEST_METHOD']=="POST"){
        // checking for table exists or not
        function tableExists($conn) {
            $result = mysqli_query($conn, "SHOW TABLES LIKE 'feedback'");
            return $result && mysqli_num_rows($result) > 0;
        }


        // data inserting function
    function insert($conn){

        $name = $_REQUEST['name'];
        $semester = $_REQUEST['semester'];
        $rollno = $_REQUEST['rollno'];
        $number = $_REQUEST['number'];
        $problem = $_REQUEST['problem'];
    
        
        $sql= "INSERT INTO feedback (name,semester, rollno, number, problem) VALUES ('$name', '$semester', '$rollno','$number', '$problem')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Sorry for inconvenience!\\nWe will solve your problem shortly')</script>";
        }
        else{
            echo "file not uploaded";
        }
    }
        // table creation function
    function tableCreation($conn){
        $sql = "CREATE TABLE IF NOT EXISTS feedback (
            sno INT(100) NOT NULL AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            semester VARCHAR(50) NOT NULL,
            rollno INT(100) NOT NULL,
            number BIGINT(10) NOT NULL,
            problem VARCHAR(200) NOT NULL,
            PRIMARY KEY (sno)
        ) ENGINE=InnoDB";
        

         // Execute query
    if (mysqli_query($conn, $sql) === TRUE) {
        insert($conn);
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    }

    // checking for table exists or not

    if (tableExists($conn)) {
        insert($conn);
    } 
    else {
        tableCreation($conn);
    }
}
?>
</body>
</html>