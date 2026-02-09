<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <link rel="stylesheet" href="../../css/admin/registerNewUser.css">
</head>

<body>
    <?php include __DIR__ . '../../../components/wave_background.php'; ?>
    <div class="background-glow1"></div>
    <div class="background-glow2"></div>
    <div class="content-container">
        <div class="title-form-container">
            <div class="title-container">
                <h1 id="title">Register New User</h1>
            </div>
            <div class="form-container">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="error-msg">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']); // Clear it so it doesn't show again on refresh
                        ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="success-msg">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif; ?>
                <form action="login.php" method="post" auto>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                    <input type="email" name="email" placeholder="E-mail" autocomplete="off" required>
                    <div class="password-wrapper">
                        <input type="password" name="password" class="pass" placeholder="Password" required>
                        <div class="password-toggle">
                            <object id="eye-icon" data="../../icons/eye-open.svg" type="image/svg+xml"></object>
                        </div>
                    </div>
                    <input type="tel" name="contact" placeholder="Contact Number" required>
                    <p>Select User Role</p>
                    <div class="radio-btn-wrapper">
                        <div class="radio-btn">
                            <input type="radio" id="admin" name="user_role" value="1">
                            <label for="admin">Admin<br>
                        </div>
                        <div class="radio-btn">
                            <input type="radio" id="tutor" name="user_role" value="2">
                            <label for="tutor">Tutor<br>
                        </div>
                        <div class="radio-btn">
                            <input type="radio" id="student" name="user_role" value="3">
                            <label for="student">Student<br>
                        </div>
                    </div>
                    <button type="submit" name="login">Log In</button>
                </form>
            </div>
        </div>
        <div class="footer-container">
            <!-- Footer -->
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </div>
    <script src="../../scripts/password_toggle.js"></script>
</body>

</html>