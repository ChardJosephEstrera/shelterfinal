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
    <title>Want to adopt?</title>

    <link rel="stylesheet" href="../assets/css/designadoptintro.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php include('../includes/navbar_header-client.php'); ?>

    <div class="adopt-intro-pic-1">
          
     <p class="adopt-intro-text1 fs-1 text-shadow fw-bold px-5 ">Adopting one animal may not change the world, but it will surely change theirs—and yours.</p>
     <button type="button" class="btn btn-secondary px-5" onclick="window.location.href='adoption-form.php'">Apply for adoption</button>
        
    </div>


    <div class="Adopt-Requirements d-flex justify-content-center align-items-center flex-column">
    <p class="fs-2 text-center">Requirements for Adopting</p>
    <ul class="Values list-unstyled text-center">
        <li class="list-group-item px-5 m-3 fs-5 py-5"><strong></strong> Age: Must be of legal age (usually 18+).</li>
        <li class="list-group-item px-5 m-3 fs-5 py-5"><strong></strong> Safe and suitable living conditions.</li>
        <li class="list-group-item px-5 m-3 fs-5 py-5"><strong></strong> Ability to afford pet care (food, vet visits).</li>
        <li class="list-group-item px-5 m-3 fs-5 py-5"><strong></strong> Willingness to dedicate time for care and companionship.</li>
        <li class="list-group-item px-5 m-3 fs-5 py-5"><strong></strong> Proof of ability to provide necessary health care.</li>
    </ul>
</div>





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4/Jgjtg9PHx48/zAn6J26hDh10KxBf7fgtqpjY7hyosOW9/PP4lnnKsyI" crossorigin="anonymous"></script>




    <?php include('../includes/footer_client.php'); ?>
</body>
</html>
