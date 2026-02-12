<?php

session_start();

$errors = [
    'login' => $_SESSION['login-error'] ?? ''
];

session_unset();

function showError($error)
{
    return !empty($error) ? "<div class='error-message' style='width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 8px; background: rgba(255, 68, 58, 0.65); border: 2px solid rgba(255, 69, 58, 0.3); color: rgba(255,255,255, 1); font-size: 14px; text-align: center; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); animation: fadeIn 0.3s ease-in-out;'>$error</div>" : '';
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp/src/setup/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to LearnWithOmar</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/login.css?v=1.1">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/components/backgrounds/stars.css?v=1.1">
</head>

<body>
    <?php include ROOT_PATH . 'components/backgrounds/stars.php'; ?>
    <div class="background-glow1"></div>
    <div class="background-glow2"></div>
    <div class="content-container">
        <div class="title-form-container">
            <div class="title-container">
                <h1 id="title">Log In</h1>
                <div class="subtitle-holder">
                    <div class="logo">
                        <img src="<?php echo BASE_URL; ?>/icons/graduationhat.svg" alt="graduation-hat">
                    </div>
                    <p id="subtitle">LearnWithOmar</p>
                </div>
            </div>
            <div class="form-container">
                <?= showError($errors['login']); ?>
                <form action="<?php echo BASE_URL; ?>processes/loginProcess.php" method="post">
                    <input type="text" name="email_or_name" placeholder="Email or Username" autocomplete="off" required>
                    <div class="password-wrapper">
                        <input type="password" name="password" class="pass" placeholder="Password" required>
                        <div class="password-toggle">
                            <img id="eye-icon" src="<?php echo BASE_URL; ?>icons/eye-open.svg" alt="Show Password" width="24" height="24">
                        </div>
                    </div>
                    <button type="submit" name="login">Log In</button>
                    <p>Don't have an account?
                        <a id="return-link" href="<?php echo BASE_URL; ?>index.php">Return to Home Page</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="footer-container">
            <!-- Footer -->
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>/scripts/password_toggle.js?v=1.1"></script>
</body>

</html>