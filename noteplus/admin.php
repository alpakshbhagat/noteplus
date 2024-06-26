<?php
require "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
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
            <li class="nav-items"><a href="feedback.php" class="nav-links">Feedback</a></li>
        </ul> 
    </div>
    

    <div class="container">
        <div class="input">
            <img src="Login-page-character1.png" alt="Admin png">
            <div class="inputs">
                <h2 style="color: #fff; text-align:center">Upload PDFs Only!</h2><br>
                <form action="" method="post" id="topForm">
                    <input type="text" placeholder="Add to dropdown" id="Subject" style="width: 50%;" name="tableCreation" required> 
                    <input type="submit" value="Add" id="button" style="width: 20%;">

                    <?php
                        if(isset($_POST['tableCreation'])){
                        $tableCreation = $_REQUEST['tableCreation'];
                        function tableCreation($conn, $tableCreation){
                                        $sql =  "CREATE TABLE IF NOT EXISTS `$tableCreation` (
                                        sno INT(100) NOT NULL AUTO_INCREMENT,
                                        subject VARCHAR(50) NOT NULL,
                                        unit VARCHAR(50) NOT NULL,
                                        file LONGBLOB NOT NULL,
                                        PRIMARY KEY (sno)
                                    ) ENGINE=InnoDB";
                            
                                    // Execute query
                                if (mysqli_query($conn, $sql) === TRUE) {
                                    echo "<script>alert('Option Created for ".$tableCreation."')</script> ";
                                } else {
                                    echo "Error creating table: " . $conn->error;
                                }
                            }
                            tableCreation( $conn , $tableCreation);
                        }
                    ?>
                </form>         
                <form action="" method="POST" enctype="multipart/form-data" id="bottomForm">
                    <h3 style="color: #fff; padding-bottom: 2%; text-decoration:underline">Upload your files here.</h3>
                    <?php
                        $sql = "SHOW TABLES";
                        $result = mysqli_query($conn, $sql);

                        //dropdown
                        echo '<select class="dropdown" name="subject" required>';
                        echo '<option value="" disabled selected>Choose subject:</option>';
                        while ($row = mysqli_fetch_array($result)) {
                            $tableName = $row[0];
                            // Skip adding the feedback table to the dropdown
                            if ($tableName !== 'feedback') {
                                echo '<option value="' . $tableName . '">' . $tableName . '</option>';
                            }
                        }
                        echo '</select>';
                    ?>

                    
                    
                    
                    
                    <input type="text" placeholder="Unit" name="unit" required>
                    
                    <input type="file" placeholder="file" class="file" accept="application/pdf" title="Upload PDF" style="margin-top: 2vh;" name="file" required>
        
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
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="three padding">
        <div>
            <img src="github.png" alt="" class="imglog github logo">
            <img src="linkedin.png" alt="" class="imglogo logo">
            <img src="facebook.png" alt=""  class="secondlogo logo"  >
            <img src="instagram.png" alt=""  class="secondlogo logo">
        </div>
        
    </div>
</footer>
    <?php
   


    if(isset($_POST['unit'])) {
        // echo "aaaaaaaaaaaaaaaaaa";
    $subject = $_REQUEST['subject'];
    $unit = $_REQUEST['unit'];

    // Table Exist function
    function tableExists($conn, $subject) {
        $result = mysqli_query($conn, "SHOW TABLES LIKE '$subject'");
        return $result && mysqli_num_rows($result) > 0;
    }

    // Insert Data Function

    function insertData($conn, $subject, $unit) {
        // Handle file upload
        $fileData = file_get_contents($_FILES["file"]["tmp_name"]);
        $fileData = mysqli_real_escape_string($conn, $fileData);
    
        $sql = "INSERT INTO `$subject` (subject, unit, file) VALUES ('$subject', '$unit', '$fileData')";
    
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Your notes uploaded to Noteplus Successfully.\n Thank you!")</script>';
            
        } else {
            echo "Error uploading file: " . mysqli_error($conn);
        }
    }
    
    
   

    // checking for table exists or not

    if (tableExists($conn, $subject)) {
        insertData($conn, $subject, $unit);
    } else {
        echo "<script>alert('Please add a subject')</script>";
    }
    
   // Close connection
    $conn->close(); 
}
?>
<script src="main.js"></script>
</body>
</html>