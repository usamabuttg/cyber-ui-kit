<?php
include 'core/init.php';

if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
    $username = $_GET['username'];
    if (user_exists($username) === true) {
        $user_id = user_id_from_username($username);
        $profile_data = user_data($user_id, 'first_name', 'last_name', 'email');
    } else {
        include 'includes/overall/header.php';
        echo 'sorry, that user does not exist!';
        include 'includes/overall/footer.php';
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}

include 'includes/overall/header.php';
?>

<div id="container">
    <main>
        <h1><?php echo $profile_data['first_name']; ?>'s Profile</h1>
        <p><?php echo $profile_data['email']; ?></p>
    </main>
    <?php include 'includes/aside.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>