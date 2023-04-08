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
    <a class="active" href="admin_page.php">home</a>
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
    <input type="search" placeholder="search here..." name="" id="search-box" onkeyup="search()">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<!--Dishes section starts-->
<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our dishes </h3>
    <h3 class="heading"> popular items </h3>

    <div class="box-container">

        <div class="box">
           
            <img src="burger.jpg" alt="">
            <h3>burger</h3>
            <span class = "priceValue">TK 15.99</span>
            <button class="btn" data-product-id = "1"><i class="fas fa-shopping-cart"></i>add to cart</button>

        </div>

        <div class="box">
           
            <img src="Chicken-fry.jpg" alt="">
            <h3>chicken fry</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="chicken-drumsticks.jpg" alt="">
            <h3>chicken drumsticks</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="chicken-rice-bowl.jpg" alt="">
            <h3>chicken rice bowl</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
          
            <img src="fries.jpg" alt="">
            <h3>fries</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="pasta.jpg" alt="">
            <h3>pasta</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
        
            <img src="prawn-spicy-soup.jpg" alt="">
            <h3>prawn spicy soup</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="pizza.jpg" alt="">
            <h3>pizza</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="chowmein.jpg" alt="">
            <h3>chowmein</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="kung pao chicken.jpg" alt="">
            <h3>kung pao chicken</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="friedrice.jpg" alt="">
            <h3>Fried Rice</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special.jpg" alt="">
            <h3>Chicken</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special1.jpg" alt="">
            <h3>Momos</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special2.jpg" alt="">
            <h3>Chick Biriyani</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special3.jpg" alt="">
            <h3>Pastry</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special5.jpg" alt="">
            <h3>Refreshment</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special6.jpg" alt="">
            <h3>Black Tea</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="Special7.jpg" alt="">
            <h3>Hot Chocolate Coffee</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>




    </div>
 </div>



</section>

<!--Dishes section ends-->
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

</body>
</html>