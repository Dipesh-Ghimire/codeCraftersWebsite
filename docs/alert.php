<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="./CSS/alert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <?php 
        session_start();
    ?>
    <div class="alert hide">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg"><?php echo $_SESSION['msg']?></span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <script>
        // Function to show the alert
        function showAlert() {
            // Add classes
            document.querySelectorAll('.alert').forEach(function (alert) {
                alert.classList.add('show');
                alert.classList.remove('hide');
                alert.classList.add('showAlert');
            });

            // Set timeout to remove classes
            setTimeout(function () {
                document.querySelectorAll('.alert').forEach(function (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('hide');
                });
            }, 5000);
        }

        // Call showAlert function when the document is ready
        document.addEventListener('DOMContentLoaded', function () {
            showAlert();
        });

        // Click event for close button
        document.querySelectorAll('.close-btn').forEach(function (closeBtn) {
            closeBtn.addEventListener('click', function () {
                // Remove classes
                document.querySelectorAll('.alert').forEach(function (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('hide');
                });
            });
        });

    </script>
</body>

</html>