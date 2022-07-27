<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <script src="https://kit.fontawesome.com/983379c856.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
<?php
require_once 'public/blocks/header.php';
 ?>

<div class="container main">

   <div class="products">
     <?php for ($i=0; $i <count($data); $i++):?>
       <div class="product">
         <div class="image">
           <img src="/public/img/products/<?=$data[$i]['img']; ?>" alt="">
           <h3><?=$data[$i]['title']; ?></h3>
           <p><?=$data[$i]['anons']; ?></p>
          <a href="/product/<?=$data[$i]['id']?>"><button class="btn">Детальнее</button></a>
         </div>
       </div>
     <?php endfor; ?>
   </div>
</div>
 <?php
require_once 'public/blocks/footer.php';
  ?>
  </body>
</html>
