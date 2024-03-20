<?php
// Start session to store user information
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "db_connect.php";

    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if user exists in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if query returns a row (user exists)
    if (mysqli_num_rows($result) == 1) {
        // Fetch user data
        $row = mysqli_fetch_assoc($result);

        // Store user information in session variables
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["username"];

        // Redirect user to dashboard or homepage
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect user back to login page with error message
        header("Location: login.html?error=1");
        exit();
    }
} else {
    // If user directly accesses login.php, redirect them to login page
    header("Location: LoginPage1.html");
    exit();
}
?>
