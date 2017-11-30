<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Movie Review | Review</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>


    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Haebe-Flix</h1>
							<small class="site-description">Your daily dose of Haebe</small>
						</div>
					</a>
                <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="index.html">Home</a></li>
                        <li class="menu-item"><a href="about.html">About</a></li>
                    </ul>
                    <!-- .menu -->

                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content" style="height: 60vh;">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span>Movie Rental</span>
                    </div>


                    <div class="movie-list">
                        <div class="movie col-md-4">
                            <figure class="movie-poster"><img src="dummy/<?php echo $_GET['file']; ?>" alt="#"></figure>
                            <div class="movie-title">
                                <a href="#">
                                    <?php echo $_GET['name']; ?>
                                </a>
                            </div>
                        </div>
                        <form action="store.php" method="post" onsubmit="return validate();">
                            <input type="text" name="name" id="name" value="<?php echo $_GET['name']; ?>" style="display: none;" />
                            <div class="col-xs-12 col-md-2">
                                <input class="form-cotrol" type="text" placeholder="Username" style="width: 400px; margin-top: 50px;" onkeyup="check();" id="username" name="rented-to" required  />
                            </div>
                            <div class="col-md-offset-4 col-md-2 col-xs-12">
                                <input type="submit" name="status" value="Enter username" class="btn" style="width: 200px; height: 140px;" id="status" style="cursor: default;"/>
                            </div>
                        </form>

                    </div>
                    <!-- .movie-list -->


                </div>
            </div>
            <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">About Us</h3>
                            <p>We are Crimson Carnival and Dann Kudo. Hail us!</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Recent Rentals</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Justice League</a></li>
                                <li><a href="#">Thor: Ragnarok</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Help Center</h3>
                            <ul class="no-bullet">
                                <li><a href="http://www.catipsum.com/">www.catipsum.com</a></li>
                                <li><a href="http://masquerade.96.lt">masquerade.96.lt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Join Us</h3>
                            <ul class="no-bullet">
                                <li><a href="http://www.catipsum.com/">www.catipsum.com</a></li>
                                <li><a href="https://www.spotify.com/">www.spotify.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Email Address">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <div class="colophon">Copyright 2017 Haebe-Flix, Your daily dose of Haebe. All rights reserved</div>
            </div>
            <!-- .container -->

        </footer>
    </div>
    <!-- Default snippet for navigation -->



    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="js/check.js"></script>

</body>

</html>
