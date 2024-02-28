<?php
    require "connect.php";
    $unit = $_GET['unit'];
    $subject = $_GET['subject'];
    // echo $unit."<br>";
    // echo $subject;
    $sql = "SELECT file FROM `$subject` WHERE unit= '$unit' ";
    $result = mysqli_query($conn, $sql);

    // echo "hello";
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
            $pdfData = $row['file'];
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            echo $pdfData;
        }
    
?>