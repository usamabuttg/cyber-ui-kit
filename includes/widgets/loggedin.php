<div class="widget">
    <h2>Hello, <?php echo htmlspecialchars($user_data['first_name'], ENT_QUOTES); ?>!</h2>
    <div class="inner">
        <div class="profile">
            <?php
            // Agar user ka profile image DB mein hai toh dikhao
            if (isset($user_data['profile']) === true && empty($user_data['profile']) === false) {
                echo '<img src="' . htmlspecialchars($user_data['profile'], ENT_QUOTES) . '" alt="Profile Image" width="100">';
            }

            // Upload processing
            if (isset($_FILES['profile']) === true) {
                if (empty($_FILES['profile']['name']) === true) {
                    echo 'Please choose a file!';
                } else {
                    $allowed = array('jpg', 'jpeg', 'gif', 'png');

                    $file_name  = $_FILES['profile']['name'];
                    $file_parts = explode('.', $file_name);
                    $file_extn  = strtolower(end($file_parts));
                    $file_temp  = $_FILES['profile']['tmp_name'];

                    if (in_array($file_extn, $allowed) === true) {
                        change_profile_image($_SESSION['user_id'], $file_temp, $file_extn);

                        header('Location: ' . $current_file);
                        exit();
                    } else {
                        echo 'Incorrect file type. Allowed: ';
                        echo implode(', ', $allowed);
                    }
                }
            }
            ?>
            
            <!-- ✅ Upload Form (yeh missing tha!) -->
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="profile">
                <input type="submit" value="Upload">
            </form>
        </div>
        <ul>
            <li>
                <a href="logout.php">Log out</a>
            </li>
            <li>
                <a href="profile.php?username=<?php echo urlencode($user_data['user_name']); ?>">Profile</a>
            </li>
            <li>
                <a href="change_password.php">Change password</a>
            </li>
            <li>
                <a href="settings.php">Settings</a>
            </li>
        </ul>
    </div>
</div>