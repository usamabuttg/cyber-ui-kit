<?php
function change_profile_image($user_id, $file_temp, $file_extn) {
    global $conn;

    $file_path = 'images/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;

    move_uploaded_file($file_temp, $file_path);

    $user_id   = (int) $user_id;
    $file_path = mysqli_real_escape_string($conn, $file_path);

    mysqli_query($conn, "UPDATE `users` SET `profile` = '{$file_path}' WHERE `user_id` = {$user_id}");
}


function mail_users($subject, $body) {
    global $conn;
    $query = mysqli_query($conn, "SELECT `email`, `first_name` FROM `users` WHERE `allow_email` = 1");
    while (($row = mysqli_fetch_assoc($query)) !== false) {
        email($row['email'], $subject, "Hello " . $row['first_name'] . ",\n\n" . $body);
    }
}


function has_access($user_id, $type) {
    global $conn;
    $user_id = (int) $user_id;
    $type = (int) $type;

    $query = mysqli_query($conn, "SELECT COUNT(`user_id`) AS total FROM `users` WHERE `user_id` = '$user_id' AND `type` = $type");
    $row = mysqli_fetch_assoc($query);
    return ((int) $row['total'] == 1) ? true : false;
}

function recover($mode, $email) {
    $mode = sanitize($mode);
    $email = sanitize($email);

    $user_data = user_data(user_id_from_email($email), 'user_id', 'first_name', 'user_name');
    
    if ($mode == 'username') {
        email($email, 'Your Username', "Hello " . $user_data['first_name'] . ".\n\nYour username is: " . $user_data['user_name'] . "\n\n- phpacademy");
    } else if ($mode == 'password') {
        $generated_password = substr(md5(rand(999, 999999)), 0, 8);
        change_password($user_data['user_id'], $generated_password);
        update_user($user_data['user_id'], array('password_recover' => '1'));

        email($email, 'Your Password Recovery', "Hello " . $user_data['first_name'] . ".\n\nYour new password is: " . $generated_password . "\n\nPlease log in - phpacademy");
    }
}

function update_user($user_id, $update_data) {
    global $conn;
    
    $update = array();
    array_walk($update_data, 'array_sanitize');
    
    foreach ($update_data as $field => $data) {
        $update[] = '`' . $field . '` = \'' . $data . '\'';
    }
    
    $query = "UPDATE `users` SET " . implode(', ', $update) . " WHERE `user_id` = " . (int) $user_id;
    
    return mysqli_query($conn, $query);
}

function register_user($register_data) {
    global $conn;

    $register_data['active'] = 1;
    $register_data['password'] = md5($register_data['password']);

    array_walk($register_data, 'array_sanitize');

    $fields = '`' . implode('`,`', array_keys($register_data)) . '`';
    $data   = "'" . implode("','", $register_data) . "'";

    mysqli_query($conn, "INSERT INTO `users` ($fields) VALUES ($data)");
}

function user_count() {
    global $conn;
    $query = mysqli_query($conn, "SELECT COUNT(`user_id`) AS total FROM `users`");
    $row = mysqli_fetch_assoc($query);
    return (int) $row['total'];
}

function user_data($user_id) {
    global $conn;
    $user_id = (int) $user_id;

    $fun_num_args = func_num_args();
    $fun_get_args = func_get_args();

    if ($fun_num_args > 1) {
        unset($fun_get_args[0]);

        $fields = implode(', ', $fun_get_args);
        
        $query = mysqli_query($conn, "SELECT $fields FROM `users` WHERE `user_id` = '$user_id'");
        $data = mysqli_fetch_assoc($query);
        
        return $data;
    }
    return false;
}

function user_exists($username) {
    global $conn;
    $username = sanitize($username);
    $query = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE `user_name` = '$username' LIMIT 1");
    return mysqli_num_rows($query) > 0;
}

function email_exists($email) {
    global $conn;
    $email = sanitize($email);
    $query = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE `email` = '$email' LIMIT 1");
    return mysqli_num_rows($query) > 0;
}

function user_active($username) {
    return user_exists($username);
}

function user_id_from_username($username) {
    global $conn;
    $username = sanitize($username);
    $result = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE `user_name` = '$username' LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        return (int) $row['user_id'];
    }
    return false;
}

function user_id_from_email($email) {
    global $conn;
    $email = sanitize($email);
    $result = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE `email` = '$email' LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        return (int) $row['user_id'];
    }
    return false;
}

function login($username, $password) {
    global $conn;
    $user_id = user_id_from_username($username);
    $username = sanitize($username);
    $password = md5($password);

    $query = "SELECT `user_id` FROM `users` WHERE `user_name` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    
    return (mysqli_num_rows($result) == 1) ? $user_id : false;
}

function logged_in() {
    return (isset($_SESSION['user_id'])) ? true : false;
}

function change_password($user_id, $password) {
    global $conn;
    $user_id = (int) $user_id;
    $password = md5($password);
    
    mysqli_query($conn, "UPDATE `users` SET `password` = '$password', `password_recover` = 0 WHERE `user_id` = '$user_id'");
}
?>