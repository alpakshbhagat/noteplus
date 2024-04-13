<?php
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf_viewer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="pdf.css">
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

    <div class="pdfContainer" oncontextmenu="return false;">
    <nav class="sidebar close">
        <header>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
            <div class="menu-bar">
                <div class="menu">
                            <?php
                            $id = $_GET['id'];

                            $sql = "SELECT * FROM `$id`";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                ?>
                                <ul class="menu-links">
                                    <li class="nav-link" style="display: flex; flex-direction:column">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<a href='description.php?unit=" . $row['unit'] . "&subject=" . $id. "' target='iframe' style='padding: 5% 2%'><span class='text nav-text'>" . $row['unit'] . "</span></a>";
                                        }
                                    ?>
                                    </li>
                                </ul>
                                <?php
                            }
                                ?>
                </div>
            </div>
    </nav>
    <section class="home">
        <div class="text">
            <!-- <div class="overlay"></div> -->
        <iframe src="welcome.html" frameborder="0" name="iframe" id="iframe"style="width: 100%;height: 100vh; z-index:1000000000000000 "></iframe>
        </div>
    </section>
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
    <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle")
      modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    })
    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    })

    </script>
</body>
</html>
