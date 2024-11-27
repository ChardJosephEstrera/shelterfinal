<?php
// session_manager.php
class SessionManager {
    public function startSession() {
        // Start the session only if it's not already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function setSession($key, $value) {
        $_SESSION[$key] = $value;  // Set session variable
    }

    public function getSession($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;  // Get session variable
    }

    public function isLoggedIn() {
        return isset($_SESSION["user"]);  // Check if user is logged in
    }

    public function logout() {
        session_unset();  // Unset session variables
        session_destroy();  // Destroy the session
        header("Location: Login.php");  // Redirect to login page after logout
        exit();
    }

    public function checkSession() {
        // Check if the user is logged in, otherwise redirect to login
        if (!$this->isLoggedIn()) {
            header("Location: Login.php");  // Redirect to login page if not logged in
            exit();
        }
    }

    // Session Timeout Handling
    public function setSessionTimeout($timeout_duration = 1800) {
        // Start the session if it has not started yet
        $this->startSession();

        // Check if the session has expired based on last activity time
        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout_duration)) {
            $this->logout();  // If session has expired, logout
        }

        // Update last activity time to prevent timeout
        $_SESSION['last_activity'] = time();
    }
}

// Create an instance of SessionManager
$sessionManager = new SessionManager();
?>
