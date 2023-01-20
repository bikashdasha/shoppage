<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <style>
    .small-img-group{
      display: flex;
      justify-content: space-between;

    }
    .small-img-col{
      flex-basis: 24%;
      cursor: pointer;
    }
  </style>

</head>
<body>
  <header>
    <div class="nav">

      <a href="#" class="logo">
        <ion-icon name="fast-food"></ion-icon>
        Continue to shop
      </a>

      <div class="box">
        <div class="cart-count">0</div>
        <ion-icon name="cart"  id="cart-icon" ></ion-icon>
      </div>

      <div class="cart">
        <div class="cart-title"> MY Cart Items</div>
        <div class="cart-content">

        </div>
        
      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>

      <button class="btn-buy">Place Order</button>

      <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
    </div>
  </header>
  <div class="container">
    <h2 class="title">newmen NM-25 black khodal stylish full black red quartz analog watch for men Analog watch-For Men</h2>
    <div class="shop-content">


   

      <div class="food-box">
        <div class="pic">
          <img src="11.jpeg" class="food-img">
          <section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                  <img src="1.jpeg"  class="food-img" >
    
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="1.jpeg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="2.jpeg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="3.jpeg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="4.jpeg" width="100%" class="small-img" alt="">
                        </div>
                    </div>
    
                </div>
            </div>  
        </section> 
        </div>
        <h2 class="food-title">RED BLACK watch for men</h2>
        <span class="food-price">&#8377 89    85%off</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>