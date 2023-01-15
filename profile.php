<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-profile.css">
    <title>Document</title>
</head>
<body>
<section class="main-screen container-fluid">
    <div class="main-screen__content container">
      <div class="title">
        <p>Наши товары</p>
      </div>
      <div class="subtitle">
        <p>На этой странице представлены популярные товары</p>
      </div>
      <div class="main-screen__items">
        <ul class="list__items">
          <li id="1" class="list__item">
            <img class="img" src="./assets/img/sneakers.png" alt="">
            <a  href="#">Sneakers</a> 
          </li>
          <li id="2" class="list__item">
            <img class="img" src="./assets/img/coat.png" alt="">
            <a  href="#">Coat</a>
          </li>
          <li id="3" class="list__item">
            <img class="img" src="./assets/img/shirt.png" alt="">
            <a  href="#">Shirt</a> 
          </li>
          <li id="4" class="list__item">
            <img class="img" src="./assets/img/cap.png" alt="">
            <a  href="#">Cap</a> 
          </li>
        </ul>
      </div>
    </div>
  </section>
  <div class="counter">
    <p class="cnt">Число кликов: <div class="count-sneakers cnt"></div></p>
    <p class="cnt">Число кликов: <div class="count-coat cnt"></div></p>
    <p class="cnt">Число кликов: <div class="count-shirt cnt"></div></p>
    <p class="cnt">Число кликов: <div class="count-cap cnt"></div></p>
  </div>
  
    <!--Профиль-->
    <form class="main__form main__form-profile" action="">
        <h2>
            <?= $_SESSION['user']['full_name'] ?>
        </h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a class="logout" href="vendor/logout.php">Выход</a>
    </form>
    <script src="./js/app.js"></script>
</body>
</html>