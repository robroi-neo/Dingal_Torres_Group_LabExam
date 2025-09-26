<?php
$heading = "Register";

$db = new Database(base_path("cce_db.sqlite"));
$error = [];
$registered = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!Validator::string($_POST['full_name'] ?? '', 1, 255)) {
        $error['full_name'] = "Full Name is required";
    }
    if (!Validator::string($_POST['email'] ?? '', 1, 255)) {
        $error['email'] = "Email is required";
    }
    if (!Validator::string($_POST['username'] ?? '', 1, 255)) {
        $error['username'] = "Username is required";
    }
    if (!Validator::string($_POST['password'] ?? '', 1, 255)) {
        $error['password'] = "Password is required";
    }
    if (!Validator::compareStrings($_POST['password'] ?? '', $_POST['confirm_password'] ?? '')) {
        echo "Passwords do not match";
    }
    if (!empty($error)) {
        $_POST = [];
    } else {
        try {
            $db->beginTransaction();

            // Insert into users
            $db->query("
        INSERT INTO users (full_name, email, username, password)
        VALUES (:full_name, :email, :username, :password)
    ", [
                ':full_name' => $_POST['full_name'],
                ':email' => $_POST['email'],
                ':username' => $_POST['username'],
                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ]);

            $user_id = $db->lastInsertId();

            $registered = true;
            $_POST = [];
            $db->commit();
        } catch (Exception $e) {
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }
}

require view('register.view.php');
