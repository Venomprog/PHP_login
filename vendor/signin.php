<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    // if {
    //     // Сравнить логин и пароль из другого файла, если всё ок, то переадресация под админом
    // } else {
        
    // }

    if ($login == "admin"){
        
        header('Location: ../admin.php');
    } else {
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");




        if (mysqli_num_rows($check_user) > 0){
            $user = mysqli_fetch_assoc($check_user);
            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "email" => $user['email']
            ];
            header('Location: ../profile.php');

        } else {
            $_SESSION['message'] = 'Неверный логин или пароль';
            header('Location: ../index.php');
        }
    }
    // $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");




    // if (mysqli_num_rows($check_user) > 0){
    //     $user = mysqli_fetch_assoc($check_user);
    //     $_SESSION['user'] = [
    //         "id" => $user['id'],
    //         "full_name" => $user['full_name'],
    //         "email" => $user['email']
    //     ];
    //     header('Location: ../profile.php');

    // } else {
    //     $_SESSION['message'] = 'Неверный логин или пароль';
    //     header('Location: ../index.php');
    // }