<?php
session_start();
require_once __DIR__ . '/../setup/conn.php';



if (isset($_POST['login'])) {
    $email = trim($_POST['email']); // Trim whitespace
    $password = $_POST['password'];

    // 1. Use Prepared Statements (Safer & more reliable)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // 2. Debug: Check if password verify works
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            // 3. Proper Switch with breaks
            switch ($user['user_role_id']) {
                case 1:
                    header("Location: ../pages/admin/home.php");
                    break;
                case 2:
                    header("Location: ../pages/tutor/home.php");
                    break;
                case 3:
                    header("Location: ../pages/student/home.php");
                    break;
                default:
                    header("Location: ../index.php");
                    break;
            }
            exit();
        } else {
            // DEBUG: Password mismatch
            $_SESSION['login-error'] = "Incorrect Password";
        }
    } else {
        // DEBUG: Email not found
        $_SESSION['login-error'] = "No user found with that email.";
    }

    header("Location: ../pages/loginPage.php");
    exit();
}

?>