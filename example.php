<?php
@include 'config.php';
      $qty = $conn->prepare("SELECT qty FROM `products` ");
      $qty->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>