<?php
session_start();
require_once __DIR__ . '/../setup/conn.php';

if (isset($_POST['login'])) { // Matching your button name="login"
    // 1. Capture and Sanitize Inputs
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $contact  = trim($_POST['contact']);
    $role_id  = $_POST['user_role']; // Values: 1 (Admin), 2 (Tutor), 3 (Student)

    // 2. Validate Role ID exists in your roles table
    if (!in_array($role_id, [1, 2, 3])) {
        $_SESSION['error'] = "Invalid user role selected.";
        header("Location: ../admin/register.php");
        exit();
    }

    // 3. Check for Duplicate Email in users table
    $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "This email is already registered.";
        header("Location: ../admin/register.php");
        exit();
    }

    // 4. Hash the Password for the password column
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 5. Insert into users table
    $sql = "INSERT INTO users (name, password, email, contact, user_role_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $username, $hashed_password, $email, $contact, $role_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "New user registered successfully!";
        header("Location: ../admin/home.php"); // Redirect back to admin panel
    } else {
        $_SESSION['error'] = "Registration failed. Please try again.";
        header("Location: ../admin/register.php");
    }

    $stmt->close();
    $conn->close();
    exit();
}