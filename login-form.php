<?php
// Start the session to store user data if needed
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    
    // Validation: Basic email and password check
    if (empty($email) || empty($password)) {
        $error = "Please fill in both email and password.";
    } else {
        // This is a mock check; replace this with actual database checking
        // Example of a hardcoded user for simplicity
        $stored_email = 'cjloveiya@gmail.com';
        $stored_password = 'babyiya06'; // You should store passwords securely (hashed)
        
        if ($email === $stored_email && $password === $stored_password) {
            // Successful login
            $_SESSION['user'] = $email; // Store email in session
            header('Location: welcome.php'); // Redirect to welcome page
            exit;
        } else {
            // Invalid credentials
            $error = "Invalid email or password.";
        }
    }
}
?>
