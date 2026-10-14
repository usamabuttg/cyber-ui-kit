<?php
include 'core/init.php';

protected_page();

$errors = array();

if (empty($_POST) === false) {
    $required_fields = array('current_password', 'password', 'password_again');
    
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
            $errors[] = 'Fields marked with an asterisk are required.';
            break 1;
        }
    }

    if (empty($errors) === true) {
        if (md5($_POST['current_password']) === $user_data['password']) {
            if (trim($_POST['password']) !== trim($_POST['password_again'])) {
                $errors[] = 'Your new passwords do not match.';
            } else if (strlen($_POST['password']) < 6) {
                $errors[] = 'Your password must be at least 6 characters.';
            }
        } else {
            $errors[] = 'Your current password is incorrect.';
        }
    }
}

include 'includes/overall/header.php';
?>

<div id="container">
    <main>
        <h1>Change Password</h1>

        <?php
        if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
            echo '<p style="color:green;">✅ Your password has been changed successfully!</p>';
        } else {
            if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
                ?>
                <p>You must change your password now that you've requested.</p>
                <?php
            }
            
            if (empty($_POST) === false && empty($errors) === true) {
                change_password($user_data['user_id'], $_POST['password']);
                header('Location: change_password.php?success');
                exit();
            } else if (empty($errors) === false) {
                echo output_errors($errors);
            }
        }
        ?>

        <form action="" method="post">
            <ul>
                <li>
                    Current password*:<br>
                    <input type="password" name="current_password">
                </li>
                <li>
                    New password*:<br>
                    <input type="password" name="password">
                </li>
                <li>
                    New password again*:<br>
                    <input type="password" name="password_again">
                </li>
                <li>
                    <input type="submit" value="Change password">
                </li>
            </ul>
        </form>
    </main>
    <?php include 'includes/aside.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>