<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="home/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

       <!-- <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>AgroCat</a>  -->

       <a href="#" class="logoimage">
           <img src="images/logo.png" alt="logo">
       </a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#category">Farmer</a>
            <a href="#product">Product</a>
            <a href="#deal">Vender</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
          <!--  <a href="#" class="fas fa-heart"></a>  -->
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>
@yield('content')

<section class="newsletter">
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>AgroCat</a>
                <p>Come and buy product easy</p>
            <!--   <div class="share">
                    <a href="#" class="btn fab fa-facebook-f"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
                </div>  -->
            </div>
            
            <div class="box">
                <h3>our location</h3>
                <div class="links">
                    <a href="#">Jaffna</a>
                    <a href="#">Kilinochchi</a>
                    <a href="#">Mullaithivu</a>
                    <a href="#">Vavuniya</a>
                    <a href="#">Batticaloa</a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <div class="links">
                    <a href="#">home</a>
                    <a href="#">Farmer</a>
                    <a href="#">product</a>
                    <a href="#">vender</a>
                    <a href="#">contact</a>
                </div>
            </div>

            <div class="box">
                <h3>download app</h3>
                <div class="links">
                    <a href="#">google play</a>
                
                </div>
            </div>

        </div>

        <h1 class="credit"> created by <span> group D </span> | all rights reserved! </h1>

    </section>

</section>



<!-- custom js file link  -->
<script src="home/script.js"></script>
    
</body>
</html>