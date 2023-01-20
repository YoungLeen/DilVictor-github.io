<?php
    session_start();
    $connect = mysqli_connect('localhost','root','','market');
    if (!$connect){
        die('Error connect to DataBase');
    }
