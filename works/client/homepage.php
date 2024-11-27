<?php
include('../controller/session_manager.php');

// Start session and manage timeout
$sessionManager->startSession();
$sessionManager->setSessionTimeout(1800); // 30-minute session timeout

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Check if user is logged in
if (!$sessionManager->isLoggedIn()) {
    header("Location: ../controller/Login.php");
    exit();
}

// Prevent caching

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="../assets/css/designhome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('../includes/navbar_header-client.php'); ?>
    <div class="wrapper">
    

        <!-- Info Section -->
        <div class="wrapper-info">
            <div class="info-text-1">
                <h3>Welcome to JHEC's Fur Family!</h3>
                <p>Where every paw finds hope and every animal awaits a forever home. Join us in making a difference—one life at a time.</p>
                <div class="wrapper-button">
                    <button type="button" onclick="window.location.href='aboutus.php'">Learn more about Us!</button>
                </div>
            </div>

            <div class="info-pic-1">
                <img src="../assets/img/pet5.jpg" alt="picture" class="pic">
            </div>
        </div>

        <!-- Adoption Section -->
        <div class="wrapper-info-2">
            <div class="wrapper-2-text-info">
                <h1>Give a homeless pet a second chance—adopt today and change a life forever!</h1>
            </div>
            <div class="wrapper-button2">
                <button type="button" onclick="window.location.href='adoptintro.php'">Adopt Now!</button>
            </div>
        </div>

        <!-- Footer Section -->
       

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4/Jgjtg9PHx48/zAn6J26hDh10KxBf7fgtqpjY7hyosOW9/PP4lnnKsyI" crossorigin="anonymous"></script>

    <?php include('../includes/footer_client.php'); ?>
</body>
</html>
