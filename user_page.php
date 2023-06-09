<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe de NUB</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet"  href="style.css">
</head>
<body>

<!--Header starts-->
<header>

<a href="#" class="logo"><img src="logo.jpg"></a>

<nav class="navbar">
    <a class="active" href="user_page.php">home</a>
    <a href="menu.php">menu</a>
    <a href="dishes.php">dishes</a>
    <a href="order.php">order</a>
    <a href="about.php">about</a>
    <a href="login_form.php">logout</a>

    
</nav>
 
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a class="fas fa-shopping-cart"></a>
            


        </div>

</header>

<!--header ends-->

<!-- search form-->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
 

<!--Home section starts-->

<section>
    <section class= "home" id="home" >

        <div class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>chow Mein</h3>
                       <p>Try this one.</p>
                       <span>TK 15.99</span>
                        
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="chowmein.jpg" alt="">
                        </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>Fried Rice</h3>
                        <p>Try this one.</p>
                        <span>TK 15.99</span>
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="friedrice.jpg" alt="">
                        </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>kung pao chicken</h3>
                       <p>Try this one.</p>
                       <span>TK 15.99</span>
                        
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="kung pao chicken.jpg" alt="">
                        </div>
                </div>
    
            
            </div>
        
         <div class="swiper-pagination"></div>

     </div>

    </section>
    
</section>
<!--Home section ends-->













<!--Footer section starts-->
 <section class="footer">
    
    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">asdads@gmail.com</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
        </div>
    </div>

 </section>   
<!--Footer section ends-->


<!--Logout section starts-->

<!--Logout section ends-->






<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js">
    var swiper = new Swiper(".card_slider", {
      slidesPerView: 0,
      spaceBetween: 500,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    })
      

</script>


</body>    
</html>
    