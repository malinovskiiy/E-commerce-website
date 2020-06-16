<?php 

session_start();



require_once './DBController.php';

$db = new DBController();

$username = $_POST['username'];
$password = md5($_POST['password']);

$check_user = $db->connection->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");

if(mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username'],
        "email" => $user['email']
    ];

    header('Location: ../profile.php');
} else {
    $_SESSION['msg'] = 'Неверный пароль или имя пользователя';
    header('Location: ../login.php');
};