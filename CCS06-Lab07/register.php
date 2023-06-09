<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// _____________________________________________________________________

try {
    if (isset($_POST['fullname'])) {
        $_SESSION['user_fullname'] = $_POST['fullname'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_birthdate'] = $_POST['birthday'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}
