<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!$username || !$password) {
        die("All fields are required!");
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($userId, $hash);
        $stmt->fetch();

        if (password_verify($password, $hash)) {
            // ✅ Store login session
            $_SESSION["user_id"] = $userId;
            $_SESSION["username"] = $username;

            // Redirect to dashboard (or any page you want)
            header("Location: dashboard.php");
            exit;
        } else {
            echo "❌ Invalid password!";
        }
    } else {
        echo "❌ User not found!";
    }

    $stmt->close();
    $conn->close();
}
?>
