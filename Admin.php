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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <li class="nav-items"><a href="index.html" class="nav-links">Home</a></li>
            <li class="nav-items"><a href="#" class="nav-links">Notes</a></li>
            <li class="nav-items"><a href="#" class="nav-links">About</a></li>
            <li class="nav-items"><a href="#" class="nav-links">Contact</a></li>
        </ul> 
    </div>
    

    <div class="container">
        <div class="input">
            <img src="Login-page-character1.png" alt="Admin png">
            <div class="inputs">
                <form action="" method="post">
                    <i class="fa-solid fa-book" style="color: #fff; position: relative; top: 33px; left: 370px" ></i>
                    <input type="text" placeholder="Subject" id="Subject" name="subject" required>
                    
                    <i class="fa-solid fa-chart-bar" style="color: #fff; position: relative; top: 33px; left: 370px"></i>
                    <input type="text" placeholder="Unit" name="unit" required>
                    
                    <input type="file" placeholder="file" class="file" accept="application/pdf,application/msword,
                    application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="margin-top: 2vh;" name="file" >
        
                    <input type="submit" value="Submit" id="button">

                </form>
                

            </div>


        </div>
    </div>

    <?php
    $subject = $_REQUEST['subject'];
    $unit    = $_REQUEST['unit'];
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $sql = "CREATE TABLE `Noteplus`.`$subject` (`unit` VARCHAR(50) NOT NULL )";
        $result = mysqli_query($conn, $sql);    
    }
    

    ?>







</body>
</html>