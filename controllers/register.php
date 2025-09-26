<?php
$heading = "Register";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($name == "" || $email == "" || $username == "" || $password == "") {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    if (!Validator::compareStrings($_POST['password'] ?? '', $_POST['confirm_password'] ?? '')) {
        echo "Passwords do not match";
    }

    // Check if username or email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE username = :username OR email = :email");
    $check->bindParam(':username', $username, PDO::PARAM_STR);
    $check->bindParam(':email', $email, PDO::PARAM_STR);
    $check->execute();

    if ($check->fetch(PDO::FETCH_ASSOC)) {
        echo "Username or Email already exists.";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (name, email, username, password) 
                            VALUES (:name, :email, :username, :password)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("Location: login.php?registered=1");
        exit;
    } else {
        echo "Error: Could not register user.";
    }
}

require view('register.view.php');
