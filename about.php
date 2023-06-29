<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
<style>
.about .row .box .why svg{
   
   width: 50px;
    height: 50px;
    color: hsl(199,100%, 33%);
    
}
.reviews .box-container .box{
   padding:2rem;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   height:600px;
   box-sizing:border-box;
}

   </style>
</head>
<body>
<?php include 'header.php'; ?>

<section class="about">
   <div class="row">
      <div class="box">
         <img src="images/img7.jpg" alt="" >
         <h3>Our Story</h3>
         <p>We Premium Shopping Mart, located at Tokha-3, Kathmandu, Nepal, one of the most renowned and popular dealers in Grocery , nutrition & food supplements. The products offered by us include -fruits and vegetables, top quality pulses and food grains, dairy products and hundreds of branded items , sports nutrition, health supplements, women's health, natural dietary supplements, semi-synthetic supplements and synthetic supplements. We believe that there is no substitute for quality when it comes to our health! So, we strive to give the most effective products to our customers. Contact us today!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about.png" alt="" style="width:70%; height:50%; margin-top:100px;">
         <h3>what we provide?</h3>
         <p></p>
         <div class='why'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
</svg>
<p>Best prices & offers</p>
        </div>
            <div class='why'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
</svg>
<p>Assured Quality</p>
            </div>
            <div class='why'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
</svg>
<p>Wide Assortments</p>
            </div>
            <div class='why'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
</svg>
<p>On Time Delivery</p>
            </div>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>
<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic1.png" alt="">
         <h1>Very fast dispatch</h1>
         <p>Very fast dispatch, I was really surprised at how fast it came. The glass products were packaged very safely in bubble wrap and arrived intact. Perishable goods also packed very well and were still cold on arrival. They offer high quality products with a good selection of different products and varieties. Very reasonable prices as well compared to other similar stores. Highly recommend this store for all your Turkish goods :).</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raj Kumar Maharjan</h3>
      </div>

      <div class="box">
         <img src="images/pic2.png" alt="">
         <h1>budget-friendly shopping </h1>
         <p>Excellence in packaging is evident in every aspect. Despite concerns about maintaining the cold chain for dairy products like cheese, I was pleasantly surprised to find them well-insulated with two ice packs. Furthermore, it's important to note that the prices offered in the UK are incredibly competitive and budget-friendly.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanam Shrestha</h3>
      </div>

      <div class="box">
         <img src="images/pic3.png" alt="">
         <h1>Fantastic! </h1>
         <p>Fantastic! After living in north London for 20 years, we moved to the south of England. We have been trying to find Turkish shops around us but nothing. I am so glad I discovered Best Grocery. I have just received my parcel which was well packed and everything is well within their sell by date. One item was out of stock and I received an email with a replacement suggestion. I am super grateful, will be shopping here more. Thank you.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ajaya Kumar Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic4.png" alt="">
         <h1>Excellent service!  </h1>
         <p>Excellent service! All items arrived in good condition and fresh, packed well. And they arrived with a free next day delivery. I will keep buying.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sushan Dangol</h3>
      </div>

      <div class="box">
         <img src="images/pic5.png" alt="">
         <h1>Best Grocery Grocery Store</h1>
         <p>Best Grocery Grocery Stores is a leading grocery store in the area. When visiting them you will find a wide selection of items and fantastic prices. The staff there are very helpful, friendly and knowledgeable. I highly recommend this location for anyone looking for their next shopping experience.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Saurav Paudel</h3>
      </div>

      <div class="box">
         <img src="images/pic6.png" alt="">
         <h1>Searched numerous sites for my goods...</h1>
         <p>Searched numerous sites for my goods and whilst there was some sites that offered different brands and in some case cheaper prices I’m so glad I went with Best Grocery. I will certainly be ordering again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ram Shrestha</h3>
      </div>

   </div>

</section>




<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>

</html>