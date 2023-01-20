<?php
error_reporting(E_ERROR);
session_start();
if(!$_SESSION['user']){
    header('Location: auth.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="<?= $_SESSION['user']['avatar']?>" width="100" alt="">
<h2><?= $_SESSION['user']['full_name']?></h2>
<a href="logout.php">Выход</a>
<p>
    Вернуться на <a class="link2" href="index.php">главную</a>
</p>
</body>
</html>