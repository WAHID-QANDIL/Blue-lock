<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Your description">
  <meta name="author" content="Blue-lock">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->


        <link rel="stylesheet" href="../Front-end/CCSs/slider.css">


        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="../Front-end/CCSs/bootstrap.min.css" rel="stylesheet">
        <link href="../Front-end/CCSs/fontawesome-all.min.css" rel="stylesheet">
        <link href="../Front-end/CCSs/swiper.css" rel="stylesheet">
        <link href="../Front-end/CCSs/styles.css" rel="stylesheet">
        <!-- Favicon  -->
        <link rel="icon" href="../Front-end/Media/home-images/favicon.png">
	<title>HOME</title>
	<!-- <link rel="stylesheet" type="text/css" href="styl.css"> -->
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">




    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
          <!--  <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>-->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Leno</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                  <div class=""style="	margin-right:10rem;">

                      <li class="nav-item">
                           <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
                      </li>
                      <li class="nav-item">
                         <a href="logout.php" id="logout">Logout</a>
                      </li>
                  </div>

                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./payment.html">Pyment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Blue-lock/Back-end/">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Blue-lock/Back-end/signup.php">Sign Up</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="./contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./who_are_we.html">Who_are_we</a>
                    </li>

                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>


            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- end of navigation -->





    <header >
<h1 id="brand-name">BLUE-LOCK</h1>
<p class="tagline">Safe Delivery, all Users</p>

</header>

    <h2>Clearance Items</h2>
    <p class="category-description">These electric scooters are designed for everyday use, with features such as a lightweight frame, compact size, and long battery life!</p>

      <br><br>



    <div class="item">
        <h3>Asics</h3>
        <figure>
            <img src="../Front-end/Media/home-images/testimonial-4.jpg"  alt="a New Balance scoter in olive drab with a black logo">
            <!-- full size image at: https://images.unsplash.com/photo-1560072810-1cffb09faf0f -->

        </figure>
        <p class="price">$6 USA</p>
        <p class="special">Take one now !</p>
        <label for="size-select">Time:/h</label>
        <select name="size" id="size-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="10">11</option>
            <option value="10">12</option>
        </select>
        <label for="color-select">Color:</label>
        <select name="color" id="color-select">
            <option value=""></option>
            <option value="blue" >blue</option>
            <option value="red">red</option>
            <option value="black">black</option>
        </select>
        <label for="quantity-select">Quantity:</label>
        <select name="quantity" id="quantity-select">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

            <button type="button">Add to Cart</button>


    </div>

    <div class="item">
        <h3>Adidas</h3>
        <figure>
            <img src="../Front-end/Media/home-images/testimonial-5.jpg"  alt="a New Balance scoter in olive drab with a black logo">


        </figure>
        <p class="price">$10 USD</p>

        <p class="special">Take one now !</p>
        <label for="size-select">Time:/h</label>
        <select name="size" id="size-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="10">11</option>
            <option value="10">12</option>
        </select>
        <label for="color-select">Color:</label>
        <select name="color" id="color-select">
            <option value=""></option>
            <option value="blue" >blue</option>
            <option value="red">red</option>
            <option value="black">black</option>
        </select>
        <label for="quantity-select">Quantity:</label>
        <select name="quantity" id="quantity-select">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <button type="button">Add to Cart</button>
    </div>

    <div class="item">
        <h3>New Balance</h3>
        <figure>
            <img src="../Front-end/Media/home-images/testimonial-1.jpg" alt="a New Balance scoter in olive drab with a black logo">
            <!-- full size image at: https://images.unsplash.com/photo-1539185441755-769473a23570 -->
            <figcaption></figcaption>
        </figure>
  <p class="price">$15 USD</p>
        <p class="special">Take one now !</p>
        <label for="size-select">Time:/h</label>
        <select name="size" id="size-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="10">11</option>
            <option value="10">12</option>
        </select>
        <label for="color-select">Color:</label>
        <select name="color" id="color-select">
            <option value=""></option>
            <option value="blue" >blue</option>
            <option value="red">red</option>
            <option value="black">black</option>
        </select>
        <label for="quantity-select">Quantity:</label>
        <select name="quantity" id="quantity-select">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="button">Add to Cart</button>
    </div>

    <script src="../Front-end/Front-end/CCSs/bootstrap.min.css"></script> <!-- Bootstrap framework -->
    <script src="../Front-end/CCSs/swiper.css"></script> <!-- Swiper for image and text sliders -->
    <script src="JS/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="JS/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
    <script src="JS/scripts.js"></script> <!-- Custom scripts -->

</body>
</html>






<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
