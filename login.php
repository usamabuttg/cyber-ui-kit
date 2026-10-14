<?php
include 'core/init.php';
logged_in_redirect();

$errors = array();

if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) === true || empty($password) === true) {
        $errors[] = 'You need to enter a username and password.';
    } else if (user_exists($username) === false) {
        $errors[] = 'We can\'t find that username. Have you registered?';
    } else if (user_active($username) === false) {
        $errors[] = 'You haven\'t activated your account!';
    } else if (strlen($password) > 32) {
        $errors[] = 'Password is too long.';
    }

    if (empty($errors) === true) {
        $login = login($username, $password);
        if ($login === false) {
            $errors[] = 'That username/password combination is incorrect.';
        } else {
            $_SESSION['user_id'] = $login;
            header('Location: index.php');
            exit();
        }
    }
}

include 'includes/overall/header.php';
?>

<div id="container">
    <main>
        <h1>Login</h1>
        
        <?php
        if (empty($errors) === false) {
            echo output_errors($errors);
        }
        ?>
        
        <!-- ✅ Login Form -->
        <form action="" method="post">
            <ul>
                <li>
                    Username:<br>
                    <input type="text" name="username">
                </li>
                <li>
                    Password:<br>
                    <input type="password" name="password">
                </li>
                <li>
                    <input type="submit" value="Log in">
                </li>
            </ul>
        </form>
    </main>
    <?php include 'includes/aside.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>