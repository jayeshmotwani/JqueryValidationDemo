<?php
// login-process.php
require_once 'classes/Users.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($username) || empty($password)) {
        http_response_code(400);
        echo 'Username and password are required';
        exit;
    }
    $debug = false;
    $users = new Users($debug);
    $isValid = $users->validateCredentials($username, $password);

    if ($isValid) {
        echo 'Login successful';
    } else {
        http_response_code(401);
        echo 'Invalid credentials';
    }
} else {
    http_response_code(405);
    echo 'Method not allowed';
}
