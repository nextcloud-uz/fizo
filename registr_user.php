<?php
    include_once 'db_conn.php';

    if(isset($_POST['reg_user']))
    {
        $err = [];

        // проверям логин
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['username']))
        {
            $err[] = "Login faqat lotin alifbosidagi harf va sondan tashkil topishi kerak";
        }

        if(strlen($_POST['username']) < 3 or strlen($_POST['username']) > 30)
        {
            $err[] = "Login uzunligi 3 dan 30 simvolgacha bo`lishi shart";
        }

        // проверяем, не сущестует ли пользователя с таким именем
        $query = mysqli_query($conn, "SELECT id FROM `users` WHERE `username`='".mysqli_real_escape_string($conn, $_POST['username'])."'");
        if(mysqli_num_rows($query) > 0)
        {
            $err[] = "Bu nomdagi foydalanuvchi bazada mavjud";
        }

        // Если нет ошибок, то добавляем в БД нового пользователя
        if(count($err) == 0)
        {
            $name  = $_POST['name'];
            $username = $_POST['username'];

            // Убераем лишние пробелы и делаем двойное хеширование
            $password = md5(trim($_POST['password']));

            mysqli_query($conn,"INSERT INTO `users` SET `username`='$username', `password`='$password', `name`='$name'");
            header("Location: index.php"); exit();
        }
        else
        {
            print "<b>Xatolik:</b><br>";
            foreach($err AS $error)
            {
                print $error."<br>";
            }
        }
    }
?>