<?php
// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    
    // Basic validation
    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // Example hardcoded credentials (Replace with database authentication in production)
        $stored_email = 'cjloveiya@gmail.com';
        $stored_password = 'babyiya06'; // Use hashed passwords in production

        if ($email === $stored_email && $password === $stored_password) {
            // Successful login
            $_SESSION['user'] = $email; // Save user email in session
            header('Location: welcome.php'); // Redirect to welcome page
            exit;
        } else {
            // Invalid credentials
            $error = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background">
        <div class="form-container">
            <h2>Login Failed</h2>
            <p style="color: red;"><?php echo htmlspecialchars($error ?? "Unknown error."); ?></p>
            <a href="index.html">Go back to login</a>
        </div>
    </div>
</body>
</html>
