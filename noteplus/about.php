<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h3>NotePlus</h3>
        <div class="wrapper" onclick="toggleClass()">
            <div class="dash dash1"></div>
            <div class="dash dash2"></div>
            <div class="dash dash3"></div>
        </div>
        
        <ul class="nav-menu" id="menu">
            <li class="nav-items"><a href="index.php" class="nav-links">Home</a></li>
            <li class="nav-items"><a href="notes.php" class="nav-links">Notes</a></li>
            <li class="nav-items"><a href="about.php" class="nav-links">About</a></li>
            <li class="nav-items"><a href="contact.php" class="nav-links">Contact</a></li>
        </ul>
        
         
    </div>

    <!-- main -->
    <div class="container1">
        <div class="innerdiv">
        
            <div class="top">
                <h1>Our Community</h1>
            </div>
            <div class="aboutCard">

            <div class="card1">
                <img src="alpaksh.jpg" alt=""  class="selfpic"/>
                <div>
                <h2>Alpaksh Dogra</h2>
                <p>I'm Alpaksh Dogra, a BCA student and full-stack web developer. With a passion for web development and proficiency in multiple languages, I enjoy crafting dynamic and innovative solutions for diverse projects.</p>
                <div class="icons">
                    <a href="https://github.com/alpakshbhagat" target="_blank"><img src="github.png" alt="" class="git logo"></a>
                    <a href="https://www.linkedin.com/in/alpaksh-dogra-961297234?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=andriod_app" target="_blank"><img src="linkedin.png" alt="" class="linkedin logo"></a>
                    <a href="https://www.instagram.com/_alpaksh_bhagat__" target="_blank"><img src="instagram.png" alt="" class="instagram logo"></a>
                </div>
                </div>
            </div>

            <div class="card1">
                <img src="https://picsum.photos/200" alt=""  class="selfpic"/>
                <div>
                <h2>Vanshika Bansotra</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, omnis. Esse illum quo iusto cumque explicabo, ad quisnam rerum maiores eum quos, perferendis fuga.</p>
                <div class="icons">
                    <a href=""  target="_blank"><img src="github.png" alt="" class="git logo"></a>
                    <a href=""  target="_blank"><img src="linkedin.png" alt="" class="linkedin logo"></a>
                    <a href=""  target="_blank"><img src="instagram.png" alt="" class="instagram logo"></a>
                </div>
                </div>
            </div>

            <div class="card1">
                <img src="https://picsum.photos/200" alt=""  class="selfpic"/>
                <div>
                <h2>Pardeep Singh</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, omnis. Esse illum quo iusto cumque explicabo, ad quisnam rerum maiores eum quos, perferendis fuga.</p>
                <div class="icons">
                    <a href="" target="_blank"><img src="github.png" alt="" class="git logo"></a>
                    <a href="" target="_blank"><img src="linkedin.png" alt="" class="linkedin logo"></a>
                    <a href="https://www.instagram.com/pardeepsingh___3223" target="_blank"><img src="instagram.png" alt="" class="instagram logo"></a>
                </div>
                </div>
            </div>
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