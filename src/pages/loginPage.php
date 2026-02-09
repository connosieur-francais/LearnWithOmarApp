<?php 

session_start();

$errors = [
    'login' => $_SESSION['login-error'] ?? ''
];

session_unset();

function showError($error) {
    return !empty($error) ? "<div class='error-message' style='width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 8px; background: rgba(255, 68, 58, 0.65); border: 1px solid rgba(255, 69, 58, 0.3); color: rgba(255,255,255, 1); font-size: 14px; text-align: center; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); animation: fadeIn 0.3s ease-in-out;'>$error</div>" : '';   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to LearnWithOmar</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php include __DIR__ . '../../components/wave_background.php'; ?>
    <div class="background-glow1"></div>
    <div class="background-glow2"></div>
    <div class="content-container">
        <div class="title-form-container">
            <div class="title-container">
                <h1 id="title">Log In</h1>
                <div class="subtitle">
                    <div name="logo">
                        <object data="../icons/graduationhat.svg" type="image/svg+xml"></object>
                    </div>
                    <p id="subtitle">LearnWithOmar</p>
                </div>
            </div>
            <div class="form-container">
                <?= showError($errors['login']); ?>
                <form action="../processes/loginProcess.php" method="post">
                    <input type="email" name="email" placeholder="E-mail" autocomplete="off" required>
                    <div class="password-wrapper">
                        <input type="password" name="password" class="pass" placeholder="Password" required>
                        <div class="password-toggle">
                            <object id="eye-icon" data="../icons/eye-open.svg" type="image/svg+xml"></object>
                        </div>
                    </div>
                    <button type="submit" name="login">Log In</button>
                    <p>Don't have an account?
                        <a id="return-link" href="../../src/index.php">Return to Home Page</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="footer-container">
            <!-- Footer -->
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </div>
    <script src="../scripts/password_toggle.js"></script>
</body>

</html>