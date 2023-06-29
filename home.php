<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'Already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'Already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'Added to wishlist!';
   }

}
if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND id = ?");
   $check_cart_numbers->execute([$p_name, $pid]);




   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'Already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'Added to cart!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home page</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
<style>
  
</style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Find Happiness With Us. Happy shopping!</span>
         <h3>Don't worry. We have everything you need. We focus on what you need</h3>
         <p>Who's ready for some grocery shopping? Don't forget to add some freshness to your cart with these new produce finds.</p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">Shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Fruits are an important source of dietary fiber, vitamins (especially vitamin C), and antioxidants.</p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Meat is an important part of the diet of many people because it has protein. Protein helps the growth and healing of a body and gives energy.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegetables</h3>
         <p>Most vegetables are low in calories and have a water content of over 70 percent, with only about 3.5 percent protein and less than 1 percent fat. </p>
         <a href="category.php?category=vegitables" class="btn">vegetables</a>
      </div>
      <div class="box">
         <img src="images/cat-6.png" alt="">
         <h3>fish</h3>
         <p>Fish is also a great source of omega-3 fatty acids, which are incredibly important for your body and brain.</p>
         <a href="category.php?category=fish" class="btn">fish</a>
      </div>

      <div class="box">
         <img src="images/cat-5.jpg" alt="" style="width:70%;">>
         <h3>beverage</h3>
         <p>Sugary beverages including soda, sports drinks, and energy drinks —offer hydration but with a hefty dose of unnecessary calories that the body may have a hard time regulating. </p>
         <a href="category.php?category=beverage" class="btn">beverage</a>
      </div>
      <div class="box">
         <img src="images/cat-4.png" alt="" style="width:70%;">>
         <h3>grocery</h3>
         <p>Everyone has different dietary needs, but in general, a healthy grocery shopping trip means a cart filled with nutrient-dense foods.</p>
         <a href="category.php?category=grocery" class="btn">grocery</a>
      </div>

   </div>

</section>


<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">Rs.<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</section>




<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>

</html>