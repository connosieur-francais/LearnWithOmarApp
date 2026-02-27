<!-- This is the home page (Anonymous User) -->

<?php
include __DIR__ . '/setup/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnWithOmar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="components/navigation/navigation_bar.css">
    <link rel="stylesheet" href="components/backgrounds/stars.css">
</head>

<body>
    <?php include __DIR__ . '/components/backgrounds/stars.php'; ?>
    <div class="background-glow1"></div>
    <div class="background-glow2"></div>
    <header class="nav-bar">
        <?php include __DIR__ . "/components/navigation/navigation_bar.php" ?>
    </header>

    <main>
        <div class="content">
            <h1>Your Personal Learning Hub</h1>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <!-- Footer -->
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </footer>
</body>

</html>