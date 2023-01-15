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
    <title>Регистрация</title>
</head>
<body>
    <!--Форма регистрации-->
    <section class="form__section">
        <div class="section__content container">
            <form class="main__form" action="vendor/signup.php" method="post">
                <label class="login__label" for="">ФИО</label>
                <input class="login__input" name="full_name" type="text" placeholder="Введите своё ФИО">
                <label class="password__label" for="">Логин</label>
                <input class="password__input" name="login" type="text" placeholder="Введите свой будущий логин">
                <label class="password__label" for="">Почта</label>
                <input class="password__input" name="email" type="email" placeholder="Введите адрес электронной почты">
                <label class="password__label" for="">Пароль</label>
                <input class="password__input" name="password" type="password" placeholder="Введите пароль">
                <label class="password__label" for="">Подтверждение</label>
                <input class="password__input" name="password_confirm" type="password" placeholder="Подтвердите пароль">
                <button type="submit">Войти</button>
                <p>У вас уже есть аккаунт? - <a href="/">Авторизируйтесь</a></p>
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