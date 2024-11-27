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
    <title>Want to Adopt?</title>
    <link rel="stylesheet" href="../assets/css/designadoptform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('../includes/navbar_header-client.php'); ?>

    <main class="container my-5  text-align-center justify-content-center">
                <p class="header1 d-flex fs-1 text-align-center justify-content-center">Adoption Form</p>
        <form name="adopt" class="adopt">
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" id="fullName" class="form-control" placeholder="Your Full Name" required>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" id="age" class="form-control" placeholder="Your Age" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea id="address" class="form-control" rows="2" placeholder="Your Complete Address" required></textarea>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" class="form-select" required>
            <option value="" selected disabled>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="birthdate" class="form-label">Birthdate</label>
        <input type="date" id="birthdate" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" id="email" class="form-control" placeholder="Your Email Address" required>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select id="status" class="form-select" required>
            <option value="" selected disabled>Select Status</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="other">Other</option>
        </select>
    </div>

    <!-- Adoption-Specific Questions -->
    <div class="mb-3">
        <label for="adoptReason" class="form-label">Why do you want to adopt?</label>
        <textarea id="adoptReason" class="form-control" rows="3" placeholder="Reason for adoption" required></textarea>
    </div>

    <div class="mb-3">
        <label for="petsOwned" class="form-label">How many pets do you own?</label>
        <input type="number" id="petsOwned" class="form-control" placeholder="Number of pets owned" required>
    </div>

    <div class="mb-3">
        <label for="exoticPets" class="form-label">Do you own exotic pets? If yes, please specify species, age, and breed.</label>
        <textarea id="exoticPets" class="form-control" rows="3" placeholder="Exotic pets details"></textarea>
    </div>

    <div class="mb-3">
        <label for="vet" class="form-label">Do you have a regular vet?</label>
        <input type="text" id="vet" class="form-control" placeholder="Name of vet" required>
    </div>

    <div class="mb-3">
        <label for="vaccinesUpToDate" class="form-label">Are pets up to date on their vaccines?</label>
        <select id="vaccinesUpToDate" class="form-select" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="vetCare" class="form-label">Will you be providing vet and medical attention for them when needed?</label>
        <select id="vetCare" class="form-select" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <!-- More questions can be added in similar fashion -->
    <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('../includes/footer_client.php'); ?>
</body>
</html>
