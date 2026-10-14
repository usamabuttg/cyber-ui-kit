<?php
include 'core/init.php';

protected_page();

$errors = array();

if (empty($_POST) === false) {
    $required_fields = array('first_name', 'last_name', 'email');

    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
            $errors[] = 'Fields marked with an asterisk are required.';
            break 1;
        }
    }

    if (empty($errors) === true) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'A valid email address is required.';
        } else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
            $errors[] = 'Sorry, the email \'' . htmlspecialchars($_POST['email'], ENT_QUOTES) . '\' is already in use.';
        }
    }

    if (empty($errors) === true) {
        $update_data = array(
            'first_name' => $_POST['first_name'],
            'last_name'  => $_POST['last_name'],
            'email'      => $_POST['email'],
            'allow_email' => (isset($_POST['allow_email'])) ? 1 : 0,
        );
        
        update_user($user_data['user_id'], $update_data);
        header('Location: settings.php?success');
        exit();
    }
}

include 'includes/overall/header.php';
?>

<div id="container">
    <main>
        <h1>Settings</h1>
        <?php
        if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
            echo 'Your details have been updated!';
        } else {
            if (empty($errors) === false) {
                echo output_errors($errors);
            }
        ?>

        <form action="" method="post">
            <ul>
                <li>
                    First name*:<br>
                    <input type="text" name="first_name" value="<?php echo htmlspecialchars($user_data['first_name'], ENT_QUOTES); ?>">
                </li>
                <li>
                    Last name*:<br>
                    <input type="text" name="last_name" value="<?php echo htmlspecialchars($user_data['last_name'], ENT_QUOTES); ?>">
                </li>
                <li>
                    Email*:<br>
                    <input type="text" name="email" value="<?php echo htmlspecialchars($user_data['email'], ENT_QUOTES); ?>">
                </li>
                <li>
                    <input type="checkbox" name="allow_email" <?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?>> Would you like to receive email from us?
                </li>
                <li>
                    <input type="submit" value="Update">
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