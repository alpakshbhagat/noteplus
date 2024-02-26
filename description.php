<?php
    require "connect.php";
    $unit = $_GET['unit'];
    $subject = $_GET['subject'];
    // echo $unit."<br>";
    // echo $subject;
<<<<<<< HEAD
    $sql = "SELECT file FROM `$subject` WHERE unit= '$unit' ";
=======
    $sql = "SELECT file FROM $subject WHERE unit= '$unit' ";
>>>>>>> 6bcd897230f966950ede8e31d104f497ab105bd5
    $result = mysqli_query($conn, $sql);

    // echo "hello";
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
            $pdfData = $row['file'];
            header('Content-Type: application/pdf');
            echo $pdfData;
        }
    
?>