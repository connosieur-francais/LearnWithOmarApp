<?php
$doc_root_folder = $_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp';
include ($doc_root_folder . '/src/setup/conn.php');
include_once($doc_root_folder . '/src/setup/config.php');
$current_page = 'contact-me';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnWithOmar | Contact Me</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>resources/images/logo.png">
</head>
<body>
    <header class="nav-bar">
        <?php include ROOT_PATH . 'components/navigation_bar.php'; ?>
    </header> <!-- End of header -->
    <main class="main-content-container">
        
    </main><!-- End of main content -->

    <footer>
        <div class="footer-container">
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </footer><!-- End of footer -->
</body>
</html>