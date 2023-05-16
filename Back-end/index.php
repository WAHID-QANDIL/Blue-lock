<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="../Front-end/CCSs/slider.css"> -->
	<link rel="stylesheet" type="text/css" href="styl.css">

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
        <title>LOGIN</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="../Front-end/CCSs/bootstrap.min.css" rel="stylesheet">
        <link href="../Front-end/CCSs/fontawesome-all.min.css" rel="stylesheet">
        <link href="../Front-end/CCSs/swiper.css" rel="stylesheet">
        <link href="../Front-end/CCSs/styles.css" rel="stylesheet">
        <!-- Favicon  -->
        <link rel="icon" href="../Front-end/Media/home-images/favicon.png">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">


			<!-- <svg viewBox="0 0 640 512" width="100" title="shoe-logo" id="logo">
					<path d="M192 160h32V32h-32c-35.35 0-64 28.65-64 64s28.65 64 64 64zM0 416c0 35.35 28.65 64 64 64h32V352H64c-35.35 0-64 28.65-64 64zm337.46-128c-34.91 0-76.16 13.12-104.73 32-24.79 16.38-44.52 32-104.73 32v128l57.53 15.97c26.21 7.28 53.01 13.12 80.31 15.05 32.69 2.31 65.6.67 97.58-6.2C472.9 481.3 512 429.22 512 384c0-64-84.18-96-174.54-96zM491.42 7.19C459.44.32 426.53-1.33 393.84.99c-27.3 1.93-54.1 7.77-80.31 15.04L256 32v128c60.2 0 79.94 15.62 104.73 32 28.57 18.88 69.82 32 104.73 32C555.82 224 640 192 640 128c0-45.22-39.1-97.3-148.58-120.81z" />
			</svg> -->

		<!-- Navigation -->

		<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation" id="nn">
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
										<li class="nav-item">
												<a class="nav-link" href="../Front-end/HTMLs/index.html">Home</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="../Front-end/HTMLs/payment.html">Pyment</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="http://localhost/Blue-lock/Back-end/">Sign In</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="http://localhost/Blue-lock/Back-end/signup.php">Sign Up</a>
										</li>
										<!--<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
												<ul class="dropdown-menu" aria-labelledby="dropdown01">
														<li><a class="dropdown-item" href="article.html">Article Details</a></li>
														<li><div class="dropdown-divider"></div></li>
														<li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
														<li><div class="dropdown-divider"></div></li>
														<li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
												</ul>
										</li>-->
										<li class="nav-item">
												<a class="nav-link" href="../Front-end/HTMLs/contact.html">Contact</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="../Front-end/HTMLs/who_are_we.html">Who_are_we</a>
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





     <form action="login.php" method="post" >
     	<h2 style="color:black;	text-align: center;	margin-bottom: 40px;">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" class="button">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>



		 <script src="../Front-end/Front-end/CCSs/bootstrap.min.css"></script> <!-- Bootstrap framework -->
		 <script src="../Front-end/CCSs/swiper.css"></script> <!-- Swiper for image and text sliders -->
		 <script src="JS/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
		 <script src="JS/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
		 <script src="JS/scripts.js"></script> <!-- Custom scripts -->

</body>
</html>
