<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
.footer{
   background-color: black;
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
   gap:2.5rem;
   align-items: flex-start;
}

.footer .box-container .box h3{
   text-transform: uppercase;
   color:var(--light-color);
   margin-bottom: 2rem;
   font-size: 2rem;
}

.footer .box-container .box a,
.footer .box-container .box p{
   display: block;
   padding:1.3rem 0;
   font-size: 1.6rem;
   color:var(--light-color);
}

.footer .box-container .box a i,
.footer .box-container .box p i{
   color:var(--green);
   padding-right: 1rem;
}

.footer .box-container .box a:hover{
   text-decoration: underline;
   color:var(--green);
}

.footer .credit{
   margin-top: 2rem;
   padding: 2rem 1.5rem;
   padding-bottom: 2.5rem;
   line-height: 1.5;
   border-top: var(--border);
   text-align: center;
   font-size: 2rem;
   color:var(--light-color);
}

.footer .credit span{
   color:var(--green);
}

  </style>
</head>

<body>
<footer class="footer">

<section class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="shop.php"> <i class="fas fa-angle-right"></i> Shop</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
      <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="cart.php"> <i class="fas fa-angle-right"></i> Cart</a>
      <a href="wishlist.php"> <i class="fas fa-angle-right"></i> Wishlist</a>
      <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
      <a href="register.php"> <i class="fas fa-angle-right"></i> Register</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <p> <i class="fas fa-phone"></i>9813353278 </p>
      <p> <i class="fas fa-phone"></i> 9868836386 </p>
      <p> <i class="fas fa-envelope"></i> BishalChansi@gmail.com </p>
      <p> <i class="fas fa-map-marker-alt"></i> Tokha-03, Kathmandu </p>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>

   </div>

</section>

<p class="credit"> &copy; copyright @ <?= date("l jS \of F Y "); ?> by <span>Ashish SuperMart</span> | all rights reserved! </p>

</footer>
</body>

</html>