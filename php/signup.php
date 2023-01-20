<?php
session_start();
require_once 'connect.php';
$full_name = $_POST['full_name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm){
    if(empty($full_name)){
        $_SESSION['message'] = 'Заполните все поля';
        $_SESSION['style'] = 'border-color:red';
        header('Location: reg.php');
    }else{
        $p = strlen($password);
        if($p < 6){
            $_SESSION['message'] = 'Минимальное кол-во символов в поле пароль - 6';
            header('Location: reg.php');
        }else{
            $path = 'uploads/'.time().$_FILES['avatar']['name'];
            if(!move_uploaded_file($_FILES['avatar']['tmp_name'],''.$path)){
                $_SESSION['message'] = 'Ошибка при загрузке файла';
                header('Location: reg.php');
            }
            $password = md5($password);

            $check_login = mysqli_query($connect, "SELECT * FROM `market` WHERE `login` = '$login'");
            $num = mysqli_num_rows($check_login);

            if($num == 0){
                mysqli_query($connect, "INSERT INTO `market` (`id`, `full_name`, `surname`, `email`, `login`, `password`, `avatar`) VALUES (NULL,'$full_name', '$surname', '$email', '$login', '$password', '$path')");
                $_SESSION['message'] = 'Регистация прошла успешно';
                header('Location: auth.php');
            }else{
                $_SESSION['message'] = 'Логин занят';
                header('Location: reg.php');
            }
        }
    }
}else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: reg.php');
}