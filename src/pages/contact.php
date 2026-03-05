<?php
$doc_root_folder = $_SERVER['DOCUMENT_ROOT'] . '/LearnWithOmarApp';
include($doc_root_folder . '/src/setup/conn.php');
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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/contact.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>resources/images/logo.png">
</head>

<body>
    <header class="nav-bar">
        <?php include ROOT_PATH . 'components/navigation_bar.php'; ?>
    </header> <!-- End of header -->
    <main class="main-content-container">
        <div class="content-wrapper">
            <div class="text-wrapper">
                <p class="main-heading">Have Questions?</p>
            </div>
            <div class="form-container">
                <p class="form-title">Send me a message</p>
                <form action="#" method="POST"
                    class="contact-form" id="contact-form">
                    <div class="text-input-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="text-input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="text-input-field">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" name="message" maxlength="1000" required></textarea>
                    </div>
                    <button type="submit" class="button-submit">Submit</button>
                </form>
            </div>
        </div>
    </main><!-- End of main content -->
    <footer>
        <div class="footer-container">
            <p class="footer">&copy; 2026 Omar H. Personal Tutoring Hub</p>
        </div>
    </footer><!-- End of footer -->
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
    const constraints = {
        name: {
            presence: {
                allowEmpty: false
            }
        },
        email: {
            presence: {
                allowEmpty: false
            },
            email: true
        },
        message: {
            presence: {
                allowEmpty: false
            }
        }
    };
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', function(event) {
        const formValues = {
            name: form.elements.name.value,
            email: form.elements.email.value,
            message: form.elements.message.value
        };
        const errors = validate(formValues, constraints);
        if (errors) {
            event.preventDefault();
            const errorMessage = Object
                .values(errors)
                .map(function(fieldValues) {
                    return fieldValues.join(', ')
                })
                .join("\n");
            alert(errorMessage);
        }
    }, false);
</script>


</html>