<?php
error_reporting(E_ERROR);
session_start();
if($_SESSION['user']){
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/main.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="body">
        <form action="signin.php" method="post">
            <label for="">Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label for="">Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <p>
                У вас нет аккаунта? <a class="link2" href="reg.php">зарегистрируйтесь</a>
            </p>
            <p>
                Вернуться на <a class="link2" href="/index.html">главную</a>
            </p>
            <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg">'.$_SESSION['message'].'</p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>