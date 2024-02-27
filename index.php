<?php
    require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>

</head>
<body>
    
<!-- Navbar -->
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
            <li class="nav-items"><a href="About.php" class="nav-links">About</a></li>
            <li class="nav-items"><a href="contact.php" class="nav-links">Contact</a></li>
        </ul> 
    </div>

    <!-- Content  -->
    <div class="container">
            <div class="left">
            <div class="para">
                <h1>I create  <span>product design</span> and brand experience</h1>
                <p>For every reason it’s not possible, there are hundreds of people who have faced the same circumstances and succeeded.</p>
                <p> – Jack Canfield</p>
            </div>
        </div>


        <div class="right">
            <img src="path.png" alt="">
        </div>
    </div>

    
    <!-- Cards -->
<div class="card-container">
    <div class="Cards">
        <h2>Our Courses</h2>
        <div class="card-holder">

            <!-- card 1 -->
            <a href="https://www.google.com">
                <button>
                    <div class="card">
                        <img src="bca.jpg" alt="">
                        <h4>Computer Department</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam iure, quo quas et autem vero aliquid. Laudantium recusandae modi numquam?</p>
                    </div>
                </button>
            </a>

            <!-- card 2 -->
            <a href="https://www.google.com">
                <button>
                    <div class="card">
                        <img src="science.jpg" alt="">
                        <h4>Science Department</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam iure, quo quas et autem vero aliquid. Laudantium recusandae modi numquam?</p>
                     </div>
                </button>
            </a>

            <!-- card 3 -->
            <a href="https://www.google.com">
                <button>
                    <div class="card">
                        <img src="comerce.jpg" alt="">
                        <h4>Commerce Department</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam iure, quo quas et autem vero aliquid. Laudantium recusandae modi numquam?</p>
                    </div>
                </button>
            </a>
        </div>
    </div>
</div>

<!-- subjects -->
<div class="card-container">
    <div class="Cards">
        <h2>Subjects</h2>
        <div class="sub-cards">
            
            <?php
                $sql = "SHOW TABLES";
                $result = mysqli_query($conn, $sql);

                $tables = [];
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_row($result)){
                        $tables[$row[0]]=$row[0];
                        $tableName = $row[0];
                            if ($tableName !== 'feedback') {
                                echo "<div class='aaaa'>
                                <div>
                                    <a href='pdf.php?id=".$tables[$row[0]]."'><h4>$row[0]</h4></a>
                                </div>
                            </div>";
                            }
                       
                    }
                }
                
            ?>

        </div>
    </div>
</div>

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
    <script src="main.js"></script>
</body>
</html>