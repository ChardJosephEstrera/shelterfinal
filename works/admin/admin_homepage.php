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
    <title>Home</title>

    <link rel="stylesheet" href="../assets/css/Admin_css/design_admin_homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Admin_css/design_admin_header.css"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&family=Lusitana:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include('../includes/admin_header.php'); ?>
    <div class="wrapper d-flex flex-column min-vh-100"> 
        <div class="wrapper-admin text-center">
            <div class="admin-text-1 border border-success p-5 border-opacity-10">
                 <p class="Admin-greet fs-1 fw-bolder">Greetings Administrator!</p>
                 <p class="Ask fs-2"> What would you like to do?</p>

                <!-- Row to group the columns -->
                <div class="img-options row justify-content-center gap-4"> <!-- Use gap for spacing between columns -->
                    <!-- Auto Feeder Column -->
                    <div class="feeder-container border border-white border border-4 py-3 col-md-4 mb-4 d-flex flex-column align-items-center shadow p-3 mb-5 bg-body-tertiary rounded">
                        <a href="admin_feeder.php" class="text-decoration-none">
                            <img src="../assets/img/dog-food.jpg" alt="Auto Feeder" class="img-fluid mb-3 rounded" style="max-width: 150px;">
                            <h5>Auto-Feeder</h5>
                        </a>
                    </div>

                    <!-- Adoption Records Column -->
                    <div class="adoption-container border border-white  border border-4 py-3 col-md-4 mb-4 d-flex flex-column align-items-center shadow p-3 mb-5 bg-body-tertiary rounded">
                        <a href="admin_adoptionrecords.php" class="text-decoration-none ">
                            <img src="../assets/img/adoption-records.jpg" alt="Adoption Records" class="img-fluid mb-3 rounded" style="max-width: 150px;">
                            <h5>Adoption Records</h5>
                        </a>
                    </div>

                    <!-- Medical Records Column -->
                    <div class="medical-container border border-white  border border-4 py-3 col-md-4 mb-4 d-flex flex-column align-items-center shadow p-3 mb-5 bg-body-tertiary rounded">
                        <a href="admin_medical.php" class="text-decoration-none">
                            <img src="../assets/img/med-records.jpg" alt="Medical Records" class="img-fluid mb-3 rounded" style="max-width: 150px;">
                            <h5>Medical Records</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4/Jgjtg9PHx48/zAn6J26hDh10KxBf7fgtqpjY7hyosOW9/PP4lnnKsyI" crossorigin="anonymous"></script>

    <?php include('../includes/admin_footer.php'); ?>
</body>
</html>
