<?php
include 'core/init.php';

if (isset($_GET['success']) === false || empty($_GET['success']) === false) {
    // Success nahi hai — process karo
    $mode_allowed = array('username', 'password');

    if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
        if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
            if (email_exists($_POST['email']) === true) {
                recover($_GET['mode'], $_POST['email']);
                header('Location: recover.php?success');
                exit();
            }
        }
    } else {
        header('Location: index.php');
        exit();
    }
}

include 'includes/overall/header.php';
?>

<div id="container">
    <main>
        <h1>Recover</h1>

        <?php
        if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
        ?>
            <p>Thanks, we've emailed you.</p>
        <?php
        } else {
        ?>
            <form action="" method="post">
                <ul>
                    <li>
                        Please enter your email address:<br>
                        <input type="text" name="email">
                    </li>
                    <li>
                        <input type="submit" value="Recover">
                    </li>
                </ul>
            </form>
        <?php
        }
        ?>
    </main>

    <?php include 'includes/aside.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>