<?php 

    session_start(); 
    if ($_SESSION['user']) {
        header('Location: profil.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="./css/registr.css">
    <link rel="icon" href="/img/logo/logo_black.png">
    <link rel="stylesheet" href="./css/adaptive.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <title>Авторизация | Revook</title>
</head>
<body>
<section class="header">

<div class="container">

    <div class="container_header">

        <div class="list">

            <div class="col_1"> <a href="/index.html"> <img src="./img/logo/logo_gray.png" alt="logo" class="col_img"> </a> </div>
            <div class="logo_text_0"><div>Ra Lis</div></div>
            <div class="col_2"><div class="logo_text">REVOOK</div></div>
            <div class="col_2"><div class="logo_text_1">REVIEW<br>BOOK</div></div>
            
        </div>

        <hr>

    </div>

</div>

</section>

<section class="body">
            <div class="log">
            
            <form action="include/signin.php" method="post">
                    <h1 class="login">Авторизация</h1>

                    <center><input type="text" name="login" placeholder="Логин" "></center>
                    <center><input type="password" name="password" placeholder="Пароль" "></center>

                    <center><a href="/index.html" class="a">На главную / </a><a href="/registr.php" class="a">Регистрация</a></center>

                    <div class="registr_btn"><center><button id="button" type="submit" name="log">Войти</button></center></div>

                    <?php
                        if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                        } 
                        unset($_SESSION['message']) ;
                    ?>

                </form>

            </div>

    </section>

</body>
</html>