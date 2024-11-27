<?php
include('../controller/session_manager.php');

// Start the session (if not already handled by SessionManager)
$sessionManager->startSession();

// Set session timeout (in seconds)
$sessionManager->setSessionTimeout(1800);  // 30 minutes timeout

// Check if the user is logged in (if applicable)
if (!$sessionManager->isLoggedIn()) {
    // Redirect to the login page or show an error message
    header("Location: ../controller/Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Feeder</title>

    <link rel="stylesheet" href="../assets/css/Admin_css/design_admin_homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Admin_css/design_admin_feeder.css"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&family=Lusitana:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include('../includes/admin_header.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4/Jgjtg9PHx48/zAn6J26hDh10KxBf7fgtqpjY7hyosOW9/PP4lnnKsyI" crossorigin="anonymous"></script>
     
    <div class="container"> 
        <h1> Auto-Feeder Page</h1>





    </div>
    




    <?php include('../includes/admin_footer.php'); ?>
</body>
</html>
