<?php 

    session_start(); 
    if (!$_SESSION['user']) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVOOK | Профиль</title>
    <link rel="icon" href="./img/logo/logo_black.png">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="stylesheet" href="./css/adaptive.css">
    <link rel="stylesheet" href="/css/fonts.css">
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

    <section id="#menu">
        <div class="container_menu">
            
            <div class="list_menu">
                    <a href="picture.html">Галлерея</a>
                    <a href="book.html">Работы</a>
                    <a href="about_autor.html">Про автора</a>
            </div>
            <hr>
        </div>
    </section >

    <section class="content">

    <div class="list_profil">
        <img src="<?= $_SESSION['user']['avatar'] ?>">

        <div class="list_profil2"> 
            <h2>Имя: <?= $_SESSION['user']['full_name'] ?></h2>
            <h2>Почта: <?= $_SESSION['user']['email'] ?></h2>
            <a href="include/logout.php" class="logout">Выход</a>
        </div>

    </div>

    </section>


    <hr>
    <section class="foot">
        <p class="one">Ⓒ Все права защищены</p>
        <p class="two">autor.ra.lis@gmail.com</p>
    </section>
    
</body>
</html>