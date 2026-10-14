<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require_once 'database/connect.php';
require_once 'functions/general.php';
require_once 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

$user_data = array();

if (logged_in() === true) {
    $user_session = $_SESSION['user_id'];
    $user_data = user_data($user_session, 'user_id', 'user_name', 'password', 'first_name', 'last_name', 'email', 'password_recover', 'type', 'allow_email','profile');
}

if ($current_file !== 'change_password.php' && $current_file !== 'logout.php' && isset($user_data['password_recover']) && $user_data['password_recover'] == 1) {
    header('Location: change_password.php?force');
    exit();
}

$errors = array();
?>