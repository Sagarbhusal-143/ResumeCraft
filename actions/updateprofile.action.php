<?php
// Ensure session is started only once
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

if ($_POST) {
    $post = $_POST;

    if (!empty($post['full_name']) && !empty($post['email_id'])) {

        $full_name = $db->real_escape_string($post['full_name']);
        $email_id = $db->real_escape_string($post['email_id']);
        $password = md5($db->real_escape_string($post['password']));

        // Get authenticated user ID safely
        $auth = $fn->Auth();
        $authid = $auth ? $auth['id'] : null;

        if (!$authid) {
            $fn->setError('Unauthorized access!');
            $fn->redirect('../login.php');
            exit;
        }

        // Check if email already exists for another user
        $result = $db->query("SELECT COUNT(*) as user FROM users WHERE email_id='$email_id' AND id!=$authid");
        $user = $result->fetch_assoc();

        if ($user['user']) {
            $fn->setError("$email_id is already registered!");
            $fn->redirect('../account.php');
            exit;
        }

        // Update user info with/without password
        if (!empty($post['password'])) {
            $db->query("UPDATE users SET full_name='$full_name', email_id='$email_id', password='$password' WHERE id=$authid");
        } else {
            $db->query("UPDATE users SET full_name='$full_name', email_id='$email_id' WHERE id=$authid");
        }

        $fn->setAlert('Profile updated successfully!');
        $fn->redirect('../account.php');

    } else {
        $fn->setError('Please fill out the form completely!');
        $fn->redirect('../account.php');
    }

} else {
    $fn->redirect('../account.php');
}
?>
