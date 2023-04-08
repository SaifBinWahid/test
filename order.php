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
<!--Order section starts-->
<section class="order" id="order">
    <h3 class="sub-heading"> order now</h3>
    <h3 class="heading"> free & fast </h3>

<form action="">
    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <input type="text" placeholder="enter your name">
        </div>
        <div class="input">
            <span>your id</span>
            <input type="number" placeholder="enter your id">
        </div>
    </div>

    <div class="inputBox">
        <div class="input">
            <span>your order</span>
            <input type="text" placeholder="enter food name">
        </div>
        <div class="input">
            <span>additional food</span>
            <input type="test" placeholder="extra with food">
        </div>
    </div>
    <!-- <div class="inputBox">
        <div class="input">
            <span>how much</span>
            <input type="number" placeholder="how many orders">
        </div> -->
        <!-- <div class="input">
            <span>date and time</span>
            <input type="datetime-local">
        </div>
    </div> -->
    <!-- <div class="inputBox">
        <div class="input">
            <span>your address</span>
            <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
        </div> -->
        <!-- <div class="input">
            <span>your message</span>
            <textarea name="" placeholder="enter your massage" id="" cols="30" rows="10"></textarea>
        </div>
    </div> -->
    <input type="submit" value="order now" class="btn">
</form>    

</section>
<!--Order section ends-->
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