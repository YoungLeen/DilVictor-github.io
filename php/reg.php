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
    <title>Регистрация</title>
</head>
<body>
<div class="body">
<form action="signup.php" method="post" enctype="multipart/form-data"><br><br><br><br><br><br>
<center> <label for="">Имя</label>
    <input type="text" name="full_name" placeholder="Введите имя"  autocomplete="on"><br><br>

    <label for="">Фамилия</label>
    <input type="text" name="surname" placeholder="Введите фамилию"  autocomplete="on"><br><br>


    <label for="">Почта</label>
    <input type="email" name="email" placeholder="Введите почту" autocomplete="on"><br><br>

    <label for="">Изображение профиля</label>
    <input type="file" name="avatar" placeholder="Вставьте изображение" autocomplete="on"><br><br>

    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин" autocomplete="on"><br><br>

    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль" autocomplete="on"><br><br>

    <label for="">Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Введите пароль" autocomplete="on"><br><br>

    <div style="text-align: center">
        <input type="checkbox"> Я соглашаяюсь с условиями регистрации<br><br>
    </div>
    
    <button type="submit">Регистрация</button>
    <p>
        Уже есть аккаунт? <a class="link2" href="auth.php">авторизуйтесь</a>
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