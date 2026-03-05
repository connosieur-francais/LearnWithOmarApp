<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp/src/setup/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/navigation_bar.css">
</head>

<body>
    <div class="header-nav-container">
        <div class="logo-name-container">
            <p class="name">LearnWithOmar</p>
            <img class="logo" src="<?php echo BASE_URL; ?>resources/icons/logo-icon.svg" alt="" width="auto" height="48px">
        </div>
        <div class="nav-buttons-container">
                <ul class="page-nav-list">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>"
                        href="<?php echo BASE_URL; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>" 
                        href="<?php echo BASE_URL; ?>pages/about.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'contact-me') ? 'active' : ''; ?>" 
                        href="<?php echo BASE_URL; ?>pages/contact.php">Contact Me</a>
                    </li>
                </ul>
            <div class="login-button" role="button" tabindex="0" onclick="window.location.href='<?php echo BASE_URL; ?>pages/login_page.php';">
                <p>Log In</p>
                <img class="icon" src="<?php echo BASE_URL; ?>resources/icons/login-icon.svg" alt="" width="auto" height="24">
            </div>
        </div>
    </div>
</body>

</html>