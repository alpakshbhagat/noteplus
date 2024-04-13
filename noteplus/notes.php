<?php
    require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="notes.css">
    <title>Notes</title>
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
            <li class="nav-items"><a href="about.php" class="nav-links">About</a></li>
            <li class="nav-items"><a href="contact.php" class="nav-links">Contact</a></li>
        </ul> 
    </div> 

<!-- subjects -->
<div class="card-container">
    <form action="" method="get">
    <input type="text" autocomplete="off" name="text" class="input" placeholder="Search">
        <button class="btn">
            <span class="btn-text-one">Search</span>
            <span class="btn-text-two">Searching</span>
        </button>
    </form>
    <div class="Cards">
        <h2>Subjects</h2>
        <div class="sub-cards" style="background: transparent;">
            
            <?php
                if (isset($_GET['text'])) {
                    $search = mysqli_real_escape_string($conn, $_GET['text']);
                    
                    // Query to fetch table names based on search term
                    $sql = "SHOW TABLES LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_row($result)) {
                                $tables[$row[0]]=$row[0];
                                $tableName = $row[0];
                                    if ($tableName !== 'feedback') {
                                        echo "<a href='pdf.php?id=".$row[0]."' style='text-align:center; text-decoration:none;'>
                                            <div class='subjectCards1 cards' style='height: 100%;''>
                                            <div class=' cardss '>
                                                <h3 style='color: #0c2d64; font-size: 20px'>$row[0]</h3>
                                                <p style='text-align:center; color: #8b8b8b'>E-book</p>
                                                </div>
                                                </div>
                                                </a>";
                                    }
                        }
                    } else {

                        echo "<div class='subjectCards1 cards' style='height: 100%;''>
                        <div class=' cardss '>
                            <h3 style='color: #0c2d64; font-size: 20px'>E-book not found</h3>
                            </div>
                            </div>
                            </a>";
                    }
                }
                else{
                 
                $sql = "SHOW TABLES";
                $result = mysqli_query($conn, $sql);

                $tables = [];
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_row($result)){
                        $tables[$row[0]]=$row[0];
                        $tableName = $row[0];
                            if ($tableName !== 'feedback') {
                                echo "<a href='pdf.php?id=".$tables[$row[0]]."' style='text-align:center; text-decoration:none;'>
                                <div class='subjectCards1 cards' style='height: 100%; overflow:hidden';>
                                <div class=' cardss '>
                                    <h3 style='color: #0c2d64; font-size: 20px'>$row[0]</h3>
                                    <p style='text-align:center; color: #8b8b8b'>E-book</p>
                                    </div>
                                    </div>
                                    </a>";
                            }
                       
                    }
                }
                   
            }
                
            ?>

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
<script src="main.js"></script>
</body>
</html>