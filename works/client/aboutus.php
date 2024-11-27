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
    <title>About Us</title>

    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="../assets/css/designabout.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('../includes/navbar_header-client.php'); ?>


     <!-- Main Content -->
     <div class="about-us-pic-1">
      

      <div class="about-us-1">
      <img src="../assets/img/Logo.png" alt="Logo" class="logo">
        <div class="about-us-1-text-info">
            <h1>JHEC's Fur Fam – a loving shelter in Pulilan, Bulacan, providing care and a second chance for cats, dogs, ducks, and rabbits.

            </h1>
        </div>
        
      </div>

    </div>

    <div class="mission-vision-values text-center">
     
     <h1 class="display-3 m-5 ">Mission</h1>
     <p class="text-center px-5 m-5 fs-5">At JHEC's Fur Fam in Bulacan, we are dedicated to providing a safe and loving environment for abandoned and surrendered animals. Our mission is to rehabilitate and rehome cats, dogs, ducks, and rabbits, ensuring they receive the care and attention they need. Through education and community engagement, we promote responsible pet ownership and animal welfare, striving to enrich the lives of both animals and their future families. We believe in giving every animal a chance for a happy life, one adoption at a time.

     </p>

     <h1 class="display-3 m-3 ">Vision</h1>
     <p class="text-center px-5 m-5 fs-5">At JHEC's Fur Fam, we envision a future where every animal, regardless of breed or background, is given the opportunity to thrive in a loving and caring home. Our goal is to be a leading sanctuary for animals in Bulacan, providing not only a safe haven but also fostering a culture of compassion, education, and responsible pet ownership. We aim to expand our reach, creating a community where animals are treated with dignity and kindness, and every family finds the joy of adopting a furry companion. Through our efforts, we strive to inspire a world where animal welfare is a shared priority and every animal has a chance to live a happy, healthy life.
 
     </p>
     <h1 class="display-3 m-3 ">Values</h1>
     <div class="values py-5">
    <p class="text-center px-3 fs-4 m-5 mb-4">
        At JHEC's Fur Fam, we believe in the power of compassion, responsibility, and community. Our values guide everything we do, from caring for our animals to connecting with our supporters. These principles are the foundation of our shelter:
    </p>

    <ul class="Values">
  <li class="list-group-item px-5 m-3 fs-5 py-5"><strong>Compassion</strong>: We treat every animal with kindness and empathy, understanding that each one deserves love and respect.</li>
  <li class="list-group-item px-5 m-3 fs-5 py-5"><strong>Integrity</strong>: We operate with transparency and honesty in all our dealings, ensuring that all our actions align with our commitment to animal welfare.</li>
  <li class="list-group-item px-5 m-3 fs-5 py-5"><strong>Community</strong>: We believe in the strength of collaboration, working together with local organizations, volunteers, and the public to make a positive impact on the lives of animals and humans alike.</li>
  <li class="list-group-item px-5 m-3 fs-5 py-5"><strong>Education</strong>: We aim to inform and inspire others about responsible pet ownership, the importance of adoption, and the well-being of animals, striving to create a more knowledgeable and compassionate society.</li>
  <li class="list-group-item px-5 m-3 fs-5 py-5"><strong>Sustainability</strong>: We are dedicated to minimizing our environmental impact, ensuring that the care we provide for animals also supports a healthy, sustainable world for future generations.</li>
</ul>





    </div>

  



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4/Jgjtg9PHx48/zAn6J26hDh10KxBf7fgtqpjY7hyosOW9/PP4lnnKsyI" crossorigin="anonymous"></script>
    <?php include('../includes/footer_client.php'); ?>
</body>
</html>
