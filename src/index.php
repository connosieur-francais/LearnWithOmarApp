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
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <div class="login_button">
        <button type="button" onClick="goToLogin()">Log In</button> <!-- Placeholder login for now -->
    </div>

    <script>
        function goToLogin() {
            window.location.href = "../src/pages/loginPage.php";
        }
    </script>
</body>

</html>