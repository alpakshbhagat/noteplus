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
                <div class="box">
                    <h2>NotePlus</h2>
                    <p>Digital e-learning platform</p>
                    <p>NotePlus is a website created for students and teachers to interact and share educational resources. It features notes uploaded by teachers, which are automatically converted to images for easy viewing by students. The site includes a search function for students to find specific notes and provides a platform for students to ask questions and seek clarification from teachers. NotePlus aims to enhance the learning experience by making educational resources more accessible and interactive.</p>
                </div>
                <h1>Our Community</h1>
            </div>
            <div class="aboutCard">

            <div class="card1">
                <img src="alpaksh.jpg" alt=""  class="selfpic"/>
                <div>
                <h2>Alpaksh Dogra</h2>
                <p>I'm Alpaksh Dogra, a BCA student and full-stack web developer. With a passion for web development and proficiency in multiple languages, I enjoy crafting dynamic and innovative solutions for diverse projects, constantly seeking new opportunities to grow.</p>
                <div class="icons">
                    <a href="https://github.com/alpakshbhagat" target="_blank"><img src="github.png" alt="" class="git logo"></a>
                    <a href="https://www.linkedin.com/in/alpaksh-dogra-961297234?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=andriod_app" target="_blank"><img src="linkedin.png" alt="" class="linkedin logo"></a>
                    <a href="https://www.instagram.com/_alpaksh_bhagat__" target="_blank"><img src="instagram.png" alt="" class="instagram logo"></a>
                </div>
                </div>
            </div>

            <div class="card1">
                <img src="vanshika.jpeg" alt=""  class="selfpic"/>
                <div>
                <h2>Vanshika Bansotra</h2>
                <p>I am Vanshika Bansotra, a passionate BCA student. As a student myself, I understand the importance of accessible learning materials. That's why created NotePlus – to provide a seamless platform for students  to access and share educational resources.</p>
                <div class="icons">
                    <a href=""  target="_blank"><img src="github.png" alt="" class="git logo"></a>
                    <a href=""  target="_blank"><img src="linkedin.png" alt="" class="linkedin logo"></a>
                    <a href=""  target="_blank"><img src="instagram.png" alt="" class="instagram logo"></a>
                </div>
                </div>
            </div>

            <div class="card1">
                <img src="pardeep.jpg" alt=""  class="selfpic"/>
                <div>
                <h2>Pardeep Singh</h2>
                <p>My name is Pardeep Singh. I am a student pursuing BCA. As a BCA student, I am passionate about exploring the vast realm of computer science and its practical applications. Additionally, I am actively involved in various extracurricular activities.</p>
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