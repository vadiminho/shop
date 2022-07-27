<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal HomePage</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/user.css">
    <script src="https://kit.fontawesome.com/983379c856.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="container top-menu">
        <div class="nav">
          <a href="/">Главная</a>
          <a href="/contact">Контакты</a>
          <a href="/contact/about">Про компанию</a>
        </div>

    <div class="tel">
    <i class="fa-solid fa-square-phone"></i> +380 95 8397 057
    </div>
      </div>

      <div class="container middle">
        <div class="logo">
          <img src="/public/img/logo.svg" alt="logo">
          <span>The king of kings</span>
        </div>
        <div class="auth-checkout">
          <a href="/basket"><button class ='btn basket'>Корзина <b>(0)</b></button></a><br>
          <?php if($_COOKIE['login']==''): ?>
          <a href="/Registration/auth"><button class ='btn auth'>Войти</button></a>
          <a href="/user/reg"><button class ='btn'>Регистрация</button></a>
        <?php else: ?>
          <a href="/registration/dashboard"><button class ='btn dashboard'>User Account</button></a>
        <?php endif; ?>
        </div>
      </div>

<div class="container main">
  <h1>Personal HomePage</h1>
  <div class="user-info">
    <h3>Hello, <?=$data['email'] ?></h3>
    <form class="" action="/registration/dashboard" method="post">
      <input type="hidden" name="exit" value="">
      <button type="submit" class='btn'>LogOut</button>
    </form>
  </div>
</div>

 <?php
require_once 'public/blocks/footer.php';
  ?>
  </body>
</html>
