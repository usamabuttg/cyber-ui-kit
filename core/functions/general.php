<?php
function email($to, $subject, $body) {
    mail($to, $subject, $body, 'From: hello@phpacademy.org');
}

function logged_in_redirect() {
    if (logged_in() === true) {
        header('Location: index.php');
        exit();
    }
}

function protected_page() {
    if (logged_in() === false) {
        header('Location: protected.php');
        exit();
    }
}

function admin_protect() {
    global $user_data;
    
    if (has_access($user_data['user_id'], 1) === false) {
        header('Location: index.php');
        exit();
    }
}

function array_sanitize(&$item) {
    global $conn;
    if ($item === null) {
        $item = '';
        return;
    }
    $item = htmlentities(strip_tags(mysqli_real_escape_string($conn, $item)));
}

function sanitize($data) {
    global $conn;
    if ($data === null) {
        return '';
    }
    return htmlentities(strip_tags(mysqli_real_escape_string($conn, $data)));
}

function output_errors($errors) {
    $output = array();
    foreach ($errors as $error) {
        $output[] = '<li>' . $error . '</li>';
    }
    return '<ul>' . implode('', $output) . '</ul>';
}
?>