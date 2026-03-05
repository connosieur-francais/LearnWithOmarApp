<!-- This is the home page (Anonymous User) -->

<?php
include __DIR__ . '/setup/conn.php';
$doc_root_folder = $_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp';

include_once($doc_root_folder . '/src/setup/config.php');
$current_page = 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnWithOmar</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/home.css">
</head> 

<body>
    <header class="nav-bar">
        <?php include ROOT_PATH . 'components/navigation_bar.php'; ?>
    </header> <!-- End of header -->
    <main class="main-content-container">
        <div class="content-wrapper-1">
            <div class="text-wrapper">
                <p class="main-heading">Your Personal Arabic <br> Learning Hub</p>
                <p class="main-description">A dedicated digital space for each of my students to track their progress, access study materials, and stay aligned with my learning roadmap.</p>
            </div>
            <div class="button-extra-large" role="button" tabindex="0" onclick="window.location.href='<?php echo BASE_URL; ?>#';">
                <p>Get Started</p>
                <img class="icon" src="<?php echo BASE_URL; ?>resources/icons/right-arrow.svg" alt="">
            </div>
        </div>
        <div class="content-wrapper-2">
            <div class="text-wrapper">
                <p class="content-2-title">What We Feature:</p>
            </div>
            <div class="feature-card-wrapper">
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <img class="feature-icon" src="<?php echo BASE_URL; ?>resources/icons/roadmap.svg" alt="Roadmap Icon">
                    </div>
                    <div class="title-desc-wrapper">
                        <p class="feature-title">Lesson Roadmap</p>
                        <p class="feature-desc">Easily track your progress, and look forward to future classes!</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <img class="feature-icon" src="<?php echo BASE_URL; ?>resources/icons/book-open.svg" alt="Book Icon">
                    </div>
                    <div class="title-desc-wrapper">
                        <p class="feature-title">Learning Materials Hub</p>
                        <p class="feature-desc">All your learning materials in one place. No fuss!</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <img class="feature-icon" src="<?php echo BASE_URL; ?>resources/icons/roadmap.svg" alt="Roadmap Icon">
                    </div>
                    <div class="title-desc-wrapper">
                        <p class="feature-title">Something Else</p>
                        <p class="feature-desc">Just imagine theres a description here</p>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End of main content -->

    <footer>
        <div class="footer-container">
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </footer><!-- End of footer -->
</body>

</html>