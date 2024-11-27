<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="../assets/css/designreg.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="title">
     <h2></h2>
     <img src="../assets/img/logo.jpg" alt="Logo" class="logo">
   </div>
   
   <div class="container">
       <h2>Register</h2>
       <?php
         if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password_repeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($fullname) or empty($username) or empty($email) or empty($password) or empty($password_repeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not Valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be 8 Characters long");
            }

            if ($password !== $password_repeat) {
                array_push($errors, "Password does not match");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else { 
                require_once "database.php";
                $sql = "INSERT INTO users (fullname, username, email, password) VALUES(?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You have successfully registered.</div>";
                } else {
                    die("Something went wrong?");
                }
            }
         }
       ?>
       <form method="post" action="">
           <div class="form-group">
               <label for="fullname">Full Name:</label>
               <input type="text" name="fullname" placeholder="Full Name" value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>">
           </div>
           <div class="form-group">
               <label for="username">Username:</label>
               <input type="text" name="username" placeholder="Username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
           </div>
           <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
           </div>
           <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" name="password" placeholder="Password">
           </div>
           <div class="form-group">
               <label for="repeat_password">Repeat Password:</label>
               <input type="password" name="repeat_password" placeholder="Repeat Password">
           </div>
           <div class="form-group">
               <button type="submit" name="submit">Submit</button>
           </div>
           <div class="link1">
               <p>Already have an account? Please <a href="Login.php" class="link-reg">Log In</a></p>
           </div>
       </form>
   </div>
</body>
</html>
