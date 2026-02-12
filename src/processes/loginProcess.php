<?php
session_start();
require_once __DIR__ . '/../setup/conn.php';

include_once($_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp/src/setup/config.php');


if (isset($_POST['login'])) {
    $email_or_name = trim($_POST['email_or_name']);
    $password = $_POST['password'];

    // 1. Modified Query: Check both the 'email' and 'name' columns
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR name = ?");
    
    // 2. Bind the same variable twice: once for email, once for name
    $stmt->bind_param("ss", $email_or_name, $email_or_name);
    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_role_id'] = $user['user_role_id']; // Good practice to store this too

            switch ($user['user_role_id']) {
                case 1:
                    header("Location: ". BASE_URL . "pages/admin/home.php");
                    break;
                case 2:
                    header("Location ". BASE_URL . "pages/tutor/home.php");
                    break;
                case 3:
                    header("Location: ". BASE_URL . "pages/student/home.php");
                    break;
                default:
                    header("Location: ". BASE_URL . "index.php");
                    break;
            }
            exit();
        } else {
            $_SESSION['login-error'] = "Incorrect Password";
        }
    } else {
        $_SESSION['login-error'] = "No user found with that name or email.";
    }

    header("Location: ../pages/loginPage.php");
    exit();
}