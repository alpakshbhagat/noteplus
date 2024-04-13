<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf_viewer.css">

    <title>Document</title>
</head>
<body>
<div id="pdfViewer"></div>

<?php
require "connect.php";
$unit = $_GET['unit'];
$subject = $_GET['subject'];

// Escape user-provided data
$unit = mysqli_real_escape_string($conn, $unit);
$subject = mysqli_real_escape_string($conn, $subject);

$sql = "SELECT file FROM `$subject` WHERE unit= '$unit' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $pdfData = $row['file'];

    // Output the JavaScript to display the PDF using PDF.js
    echo "<script>
            const pdfData = atob('" . base64_encode($pdfData) . "');
            const loadingTask = pdfjsLib.getDocument({data: pdfData});
            loadingTask.promise.then(function(pdf) {
                const numPages = pdf.numPages;

                let pageIndex = 0;
                function renderPage() {
                    pdf.getPage(pageIndex + 1).then(function(page) {
                        const viewport = page.getViewport({ scale: 1.0 });

                        // Calculate the scale factor for mobile devices
                        let scale;
                        if (window.innerWidth < 768) { // Mobile devices
                            scale = 0.75; // Increase scale factor for better quality
                        } else { // Laptops and desktops
                            scale = window.innerWidth / viewport.width; // 100% of viewport width
                        }

                        // Calculate the scaled dimensions of the PDF page
                        const scaledViewport = page.getViewport({ scale: scale });

                        // Prepare canvas using scaled PDF page dimensions
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = scaledViewport.height;
                        canvas.width = scaledViewport.width;

                        // Render PDF page into canvas context
                        const renderContext = {
                            canvasContext: context,
                            viewport: scaledViewport
                        };
                        page.render(renderContext).promise.then(function() {
                            document.body.style.overflow = 'auto'; // Enable scrolling
                            document.body.appendChild(canvas);

                            pageIndex++;
                            if (pageIndex < numPages) {
                                renderPage(); // Render next page
                            }
                        });
                    });
                }

                renderPage(); // Start rendering the first page
            });
          </script>";
}
?>

</body>
</html>
