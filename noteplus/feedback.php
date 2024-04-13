<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
        <li class="nav-items"><a href="admin.php" class="nav-links">Admin</a></li>
      </ul> 
    </div>
    

    <div class="box">
      <div>
        <div class="input">
          <img src="feedback.png" alt="Admin png">
          <h2 id="h">Feedback</h2>
        </div>
        <div class="inputs">
          <table class="table" id="myTable">
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
                  require "connect.php";
                  $i = 0;
                  $abc = "SELECT * FROM `feedback`";
                  $res = mysqli_query($conn, $abc);
                  
                  while($row = mysqli_fetch_array($res))
                  {
                      $i++;
                      echo "<tr>
                        <td data-label=\"S.No.\">$i</td>
                        <td data-label=\"Name\">" . $row['name'] . "</td>
                        <td data-label=\"Semester\">" . $row['semester'] . "</td>
                        <td data-label=\"Roll No.\">" . $row['rollno'] . "</td>
                        <td data-label=\"Mobile No.\">" . $row['number'] . "</td>
                        <td data-label=\"Issue\">" . $row['problem'] . "</td>
                      </tr>";

                  }
                ?>
            </tbody>
          </table>
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
      $(document).ready(function() {
          $('#myTable').DataTable();
      });
    </script>
</body>
</html>
