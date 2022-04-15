<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=980,initial-scale=0.3">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@200&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <title>Copy Star</title>
</head>

<body>
<?php session_start();?>
<header class="header">
    <div class="container">
        <div class="row space-between align-items-center">
            <img src="img/CopyStar.png" alt="" width ="130px">    

            <nav class="nav">
                <ul class="row">
                    <li><a class="nav-link" href="index.php">Главная</a></li>
                    <li><a class="nav-link" href="shop.php">Магазин</a></li>
                    <li><a class="nav-link" href="about.php">О нас</a></li>
                    <?php

                    if (isset($_SESSION['user']))
                    {
                        if ($_SESSION['user']['id_role']==2){
                        ?>
                        <li><a class="nav-link" href="admin.php">Личный кабинет</a></li>
                        <li><a class="nav-link" href="App/Controllers/logoutController.php">Выход</a></li>
                        <?php
                         }
                         if ($_SESSION['user']['id_role']==1)
                        {
                       ?>
                        <li><a class="nav-link" href="profile.php">Личный кабинет</a></li>
                        <li><a class="nav-link" href="App/Controllers/logoutController.php">Выход</a></li>
                        <?php
                        }
                    }
                    else
                    {
                       ?>
                        <li><a class="nav-link" href="logIn.php">Вход</a></li>
                        <li><a class="nav-link" href="register.php">Регистрация</a></li>
                        <?php
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </div>
</header>
</body>
</html>
