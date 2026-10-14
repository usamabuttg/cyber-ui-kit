<aside>
    <?php
    if (isset($_SESSION['user_id'])) {
        include __DIR__ . '/widgets/loggedin.php';
        include __DIR__ . '/widgets/user_count.php';
    } else {
        include __DIR__ . '/widgets/login.php';
    }
    ?>
</aside>