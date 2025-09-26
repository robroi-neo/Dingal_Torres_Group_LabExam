<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm = trim($_POST["confirm_password"]);

    // Validation
    if (!$fullname || !$email || !$username || !$password || !$confirm) {
        die("All fields are required!");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }
    if ($password !== $confirm) {
        die("Passwords do not match!");
    }

    // Check existing user
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        die("Username or Email already exists!");
    }
    $stmt->close();

    // Insert new user
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $fullname, $email, $username, $hash);

    if ($stmt->execute()) {
        echo "✅ Registration successful! <a href='login.html'>Login here</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
