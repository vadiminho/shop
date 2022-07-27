<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$data['title'] ?></title>
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/product.css">
    <script src="https://kit.fontawesome.com/983379c856.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
<?php
require_once 'public/blocks/header.php';
 ?>
<div class="container main">
  <h1><?=$data['title'] ?></h1>
<div class="info">
  <div>
    <img src="/public/img/products/<?=$data['img']; ?>" alt="">
  </div>
  <div>
    <p><?=$data['anons']?></p><br>
    <p><?=$data['text']?></p>
      <form action="/basket" method="post">
          <input type="hidden" name="item_id" value="<?=$data['id']?>">
          <button class = "btn">Купить за <?=$data['price']?> грн</button>
      </form>
  </div>
</div>
</div>
 <?php
require_once 'public/blocks/footer.php';
  ?>
  </body>
</html>
