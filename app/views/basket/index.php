<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basket</title>
    <link rel="stylesheet" href="/public/css/main.css">
      <link rel="stylesheet" href="/public/css/products.css">
    <script src="https://kit.fontawesome.com/983379c856.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
<?php
require_once 'public/blocks/header.php';
 ?>

<div class="container main">
<h1>Products</h1>
    <?php if(count($data['products']) == 0): ?>
        <p><?=$data['empty']?></p>
    <?php else: ?>
    <div class="products">
        <?php
        $sum = 0;
        for($i = 0; $i < count($data['products']); $i++):
            $sum += $data['products'][$i]['price'];
            ?>
            <div class="row">
                <img src="/public/img/products/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['title']?>">
                <h4><?=$data['products'][$i]['title']?></h4>
                <span><?=$data['products'][$i]['price']?> uah</span>
            </div>
        <?php endfor; ?>
        <button class="btn">Купить (<b><?=$sum?> uah</b>)</button><br>
        <a href="/basket/delete"><button class ='btn'>Удалить</button></a>
  </div>
    <?php endif;?>
</div>
 <?php
require_once 'public/blocks/footer.php';
  ?>
  </body>
</html>

