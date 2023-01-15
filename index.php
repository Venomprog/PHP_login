<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <!--Форма авторизации-->
    <section class="form__section">
        <div class="section__content container">
            <form class="main__form" action="vendor/signin.php" method="post">
                <label class="login__label" for="">Логин</label>
                <input class="login__input" name="login" type="text" placeholder="Введите свой логин">
                <label class="password__label" for="">Пароль</label>
                <input class="password__input" name="password" type="password" placeholder="Введите пароль">
                <button type="submit">Войти</button>
                <p>У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a></p>
                <?php 
                    if ($_SESSION['message']) {
                        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </section>
    
</body>
</html>