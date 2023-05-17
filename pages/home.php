<?php include 'includes/header.php'; ?>
        <?php
            if (!isset($_SESSION['auth_id']))
            {
                header('Location: action.php?page=login');
            }
        ?>
        <h1 class="text-center">Home Page</h1>
<?php include 'includes/footer.php'; ?>