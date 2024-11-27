<?php
// Include session manager
include('session_manager.php');

// Start the session (if not already handled by SessionManager)
$sessionManager->startSession();

// Set session timeout (in seconds)
$sessionManager->setSessionTimeout(1800);
  // 30 minutes timeout
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once "database.php"; 

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc(); 

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = "yes";  // Set session on successful login

        // Redirect based on user role
        if ($user['role'] == 'admin') {
            header("Location: ../admin/admin_homepage.php"); 
            exit();
        } else {
            header("Location: ../client/homepage.php"); 
            exit();
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid username or password</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/designlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="title">
        <h2></h2>
        <img src="../assets/img/Logo.png" alt="Logo" class="logo">
    </div>

    <div class="container">
        <h2>Log In</h2>

        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" name="login">Login</button>
            </div>

            <div class="link">
                <p>Don't have an account? Please <a href="reg.php" class="link-reg">Sign Up</a></p>  
            </div>
        </form>
    </div>

</body>
</html>
