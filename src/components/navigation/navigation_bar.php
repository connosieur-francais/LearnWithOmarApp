<?php
// Get the current filename
$active_page = basename($_SERVER['PHP_SELF']);
?>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp/src/setup/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="navigation_bar.css">
</head>

<body>
    <div class="nav-wrapper">
        <div class="logo-menu-wrapper">
            <div class="logo-wrapper">
                <div class="icon">
                    <object data="<?php echo BASE_URL; ?>icons/graduationhat.svg"></object>
                </div>
                <p class="logo-text">LearnWithOmar</p>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="<?php echo BASE_URL; ?>index.php" class="nav-item <?php echo ($active_page == 'index.php') ? 'active' : ''; ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>pages/about.php" class="nav-item <?php echo ($active_page == 'about.php') ? 'active' : ''; ?>">
                        About Me
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <a href="<?php echo BASE_URL; ?>pages/loginPage.php" class="login-button" draggable="false">
                <span class="button-text">Log In</span>
                <img src="<?php echo BASE_URL; ?>icons/login.svg" class="button-icon" alt="" draggable="false">
            </a>
        </div>
    </div>
</body>

</html>