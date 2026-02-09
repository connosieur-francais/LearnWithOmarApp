<?php
session_start();
require_once __DIR__ . '/../setup/conn.php'; // Ensure the slash is here

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // 1. Use Prepared Statements for security
    $stmt = $conn->prepare("SELECT id, name, email, password, user_role_id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        // 2. Verify the hashed password
        if (password_verify($password, $user['password'])) {
            
            // 3. Set Session Data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['user_role_id'];

            // 4. Check Roles and Redirect
            switch ($user['user_role_id']) {
                case 1: // Admin
                    header("Location: ../admin/home.php");
                    break;
                case 2: // Tutor
                    header("Location: ../tutor/home.php");
                    break;
                case 3: // Student
                    header("Location: ../student/home.php");
                    break;
                default:
                    header("Location: ../index.php");
            }
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
        }
    } else {
        $_SESSION['error'] = "No account found with that email.";
    }
    
    header("Location: login.php"); // Return to login if it fails
    exit();
}

?>