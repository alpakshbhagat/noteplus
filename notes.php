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
    <script>
        
        function fetchData(id) {
            // Use AJAX to fetch data based on the selected id
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("right").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_data.php?id=" + id, true);
            xhttp.send();
        }
    
    </script>
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

 <!-- side navbar -->
 <?php
  $sql = "SELECT sno, unit FROM php";
  $result = mysqli_query($conn, $sql);

  // Output the titles as list items
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<li class='active' onclick='fetchData(" . $row['sno'] . ")'>" . $row['unit'] . "</li>";
      }
  }
 ?>
 <!-- <div class="main">
     <nav class="list">
             <ul>
                <li class="active"><a href="index.html" aria-current="page">Home</a></li>
                <li><a href="contact.htm">Contact</a></li>
                <li><a href="about.htm">About</a></li>
                <li><a href="#">Another</a></li>
             </ul>
         </nav>
      -->
     <!-- iframe -->
         <iframe src="index.html" frameborder="0" class="frame" name="noteFrame"></iframe>
</div>

<?php
    // Get the id parameter from the AJAX request
// $id = $_GET['id'];

// Prepare and execute the query
$sql = "SELECT * FROM php";
$result = mysqli_query($conn, $sql);

// Fetch the result
if (mysqli_num_rows($result) > 0) {
    header("Content-type: application/pdf");
    $row = mysqli_fetch_assoc($result);
    // Output the result (you can format this as needed)
    echo "<h3>" . $row['unit'] . "</h3>";
    $a = $row['file'];
    $pdf_decoded = base64_decode ($a);
    
    echo "<p target='noteFrame'>" . $pdf_decoded . "</p>";
} else {
    echo "No results found";
}
?>

</body>
</html>