<?php

session_start();

require_once './DBController.php';

$db = new DBController();



$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['con-password'];

if ($password == $confirm_password) {

    $password = md5($password);

    $db->connection->query(
        "INSERT INTO `users` (`id`, `username`, `email`, `password`) 
        VALUES (NULL, '$username', '$email', '$password')");

    $_SESSION['msg'] = 'Registration successful!';
    header('Location: ../login.php');

} else {
    $_SESSION['msg'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}
