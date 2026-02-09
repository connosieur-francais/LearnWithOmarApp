<?php

session_start();
require_once __DIR__ . '/../setup/conn.php'; // Ensure the slash is here

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            switch ($user['user_role_id']) {
                case 1: {
                    header("Location: ../pages/admin/home.php");
                } case 2: {
                    header("Location: ../pages/tutor/home.php");
                } case 3: {
                    header("Location: ../pages/student/home.php");
                } default :
                    header("Location: ../index.php");
            }
            exit();
        }
    }

    $_SESSION['login-error'] = "Incorrect email or password";
    header("Location: ../pages/loginPage.php");
}
?>