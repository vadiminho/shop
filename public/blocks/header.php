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
      <a href="/basket">
          <?php
          require_once 'app/models/BasketModel.php';
          $basketModel = new BasketModel();
          ?>

          <button class ='btn basket'>Корзина <b>(<?=$basketModel->countItems()?>)</b></button></a><br>
      <?php if($_COOKIE['login']==''): ?>
      <a href="/registration/auth"><button class ='btn auth'>Войти</button></a>
      <a href="/user/reg"><button class ='btn '>Регистрация</button></a>
    <?php else: ?>
      <a href="/registration/dashboard"><button class ='btn dashboard'>Кабинет пользователя</button></a>
    <?php endif; ?>
    </div>
  </div>

<div class="container menu">
  <ul>
    <li><a href="/categories">Все товары</a></li>
    <li><a href="/categories/shoes">Обувь</a></li>
    <li><a href="/categories/watches">Часы</a></li>
    <li><a href="/categories/shirts">Футболки</a></li>
    <li><a href="/categories/accessories">Аксесуары</a></li>
  </ul>
</div>
</header>
