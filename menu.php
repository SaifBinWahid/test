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
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<!--Menu section starts-->
<section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h3 class="heading"> special </h3>

        <div class="box-container">

           <div class="box">
                <div class="image">
                    <img src="special.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>chicken</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special1.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>momos</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div >
            </div>

            <div class="box">
                <div class="image">
                    <img src="special2.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>chicken biriyani</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special3.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>Pastry</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special5.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>refreshment</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special6.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>black tea</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special7.jpg" alt="">

                </div>
                <div class="content">
                    <h3>hot chocolate coffee</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>

        </div>

    </section>

<!--Menu section ends-->
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