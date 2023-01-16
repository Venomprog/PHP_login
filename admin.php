<?php
include "vendor/connect.php";
$sql = mysqli_query($connect, "SELECT * FROM `users`;");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="clients__content">
        <div class="clients__menu">
            <h1>Клиенты</h1>
            <ul class="clients__list">
                <?php
                while ($clients = mysqli_fetch_assoc($sql)){  // цикл вывода для каждого пользователя его карточки с данными
                    ?>
                    <li class="clients__item">
                        <div>Имя: <?php echo $clients['full_name'];?></div>
                        <div>Логин: <?php echo $clients['login'];?></div>
                        <div>Пароль: <?php echo $clients['password'];?></div>
                        <div>Почта: <?php echo $clients['email'];?></div>
                        <div>Кроссовки: <?php echo $clients['click-sneakers'];?></div>
                        <div>Плащ: <?php echo $clients['click-coat'];?></div>
                        <div>Майка: <?php echo $clients['click-shirt'];?></div>
                        <div>Шляпа: <?php echo $clients['click-cap'];?></div>
                    </li>
                    <?php
                }
                

                ?>
            </ul>
            <a href="index.php">Выход</a>
        </div>
    </section>
</body>
</html>