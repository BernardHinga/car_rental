<?php
    include_once "includes/database.inc.php";
    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cartraval</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!--Header-->
        <header id="header" class="alt">
            <a href="index.php" class="logo"><strong>Cartraval Tours</strong></a>
            <ul class="icons">
                <li>
                    <a href="#" class="fa fa-twitter"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-facebook"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-instagram"></a>
                </li>
            </ul>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li class="active"><a href="#"><span class="fa fa-home"><span style="font-family: cursive;"> Home</span></span></a></li>
                <li><a href="about.html"><span class="fa fa-question"><span style="font-family: cursive;"> About us</span></span></a></li>
                <li><a href="contact.html"><span class="fa fa-phone"><span style="font-family: cursive;"> Contact us</span></span></a></li>
                <li><a href="gallery.html"><span class="fa fa-image"><span style="font-family: cursive;"> Gallery</span></span></a></li>
                <li><a href="services.html"><span class="fa fa-gears"><span style="font-family: cursive;"> Services</span></span></a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>Rent a car at low prices</h1>
                </header>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, libero!</p>
                    <!-- <ul class="actions">
                        <li><a href="#one" class="button next">Select a Car</a></li>
                    </ul> -->
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one" class="col-lg-12 tiles">
                <article class="col-lg-4 col-md-4">
                    <span class="image">
						<img src="images/image-1.jpg" alt="" />
					</span>
                    <header class="major">
                        <h3>Large: Premium</h3>
                        <p>PRICE FROM: <strong>$ 140.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>
                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
                <article class="col-lg-4 col-md-4">
                    <span class="image">
										<img src="images/image-2.jpg" alt="" />
									</span>
                    <header class="major">
                        <h3>Large: Station wagon</h3>
                        <p>PRICE FROM: <strong>$ 120.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
                <article class="col-lg-4 col-md-4">
                    <span class="image">
										<img src="images/image-3.jpg" alt="" />
									</span>
                    <header class="major">
                        <h3>Medium: Low emission</h3>
                        <p>PRICE FROM: <strong>$ 75.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
                <article class="col-lg-4 col-md-4">
                    <span class="image">
										<img src="images/image-4.jpg" alt="" />
									</span>
                    <header class="major">
                        <h3>Small: Economy</h3>
                        <p>PRICE FROM: <strong>$ 65.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
                <article class="col-lg-4 col-md-4">
                    <span class="image">
										<img src="images/image-5.jpg" alt="" />
									</span>
                    <header class="major">
                        <h3>Small: Mini</h3>
                        <p>PRICE FROM: <strong>$ 55.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
                <article class="col-lg-4 col-md-4">
                    <span class="image">
										<img src="images/image-6.jpg" alt="" />
									</span>
                    <header class="major">
                        <h3>Small: Mini Low emission</h3>
                        <p>PRICE FROM: <strong>$ 49.00</strong></p>
                        <p>Available vehicles: <br> <span>Opel Astra</span> | <span>Tesla Model S</span> | <span>Mazda 6</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small">Book now<span class="fa fa-arrow-right"></span> </a>
                        </div>
                    </header>
                </article>
            </section>

            <!-- Two -->
            <section id="two">
                <div class="inner">
                    <div>
                        <header class="major">
                            <h2>About us</h2>
                        </header>
                    </div>
                    <section id="car-list-area" class="section-padding">
                        <div class="container">
                            <div class="row">
                                <!-- Car List Content Start -->
                                <div class="col-lg-12">
                                    <div class="car-list-content">
                                        <div class="row">

                                            <!-- Single Car Start -->
                                            <div class="col-lg-4 col-md-4" id="a3">
                                                <div class="single-car-wrap">
                                                    <div class="car-list-thumb car-thumb-1">
                                                        <img src="images/image-1.jpg" alt="Audia3">
                                                    </div>
                                                    <div class="car-list-info without-bar">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure iste ad assumenda natus in libero dolorem. Odit beatae voluptatum tempore dicta provident ipsum molestiae, recusandae veritatis dolorem dolor maiores autem?
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4" id="a3">
                                                <div class="single-car-wrap">
                                                    <div class="car-list-thumb car-thumb-1">
                                                        <img src="images/image-1.jpg" alt="Audia3">
                                                    </div>
                                                    <div class="car-list-info without-bar">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, labore magni modi quo numquam ipsa reprehenderit, sint nisi voluptatibus cupiditate dolore, nihil facilis incidunt! Consequatur sint labore nihil ut consectetur!
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4" id="a3">
                                                <div class="single-car-wrap">
                                                    <div class="car-list-thumb car-thumb-1">
                                                        <img src="images/image-1.jpg" alt="Audia3">
                                                    </div>
                                                    <div class="car-list-info without-bar">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure iste ad assumenda natus in libero dolorem. Odit beatae voluptatum tempore dicta provident ipsum molestiae, recusandae veritatis dolorem dolor maiores autem?
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>

                    <div id="buttons">
                        <ul class="actions">
                            <li><a href="about.html" class="button small">Read more <span class="fa fa-arrow-right"></span> </a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3><span style="color: salmon;text-decoration: underline;">About Us</span></h3>
                        <p class="mb-4">
                            <img src="images/image-5.jpg" alt="Image placeholder" class="img-fluid">
                        </p>

                        <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h3><span style="color: salmon;text-decoration: underline;">Latest Post</span></h3>
                                <div class="post-entry-sidebar">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <img src="images/image-6.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/image-3.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/image-4.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-4">

                                <div class="mb-5">
                                    <h3><span style="color: salmon;text-decoration: underline;">QUICK LINKS</span></h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Adventure</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Categories</a></li>
                                    </ul>
                                </div>

                                <div class="mb-5">
                                    <h3><span style="color: salmon;text-decoration: underline;">Social</span></h3>
                                    <ul class="list-unstyled social">
                                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="small">

                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> | All Rights Reserved <br/> This website is constructed by Hinga_ (<a href="#"><span id="git" class="fa fa-github"></span> Bernard Hinga</a>)

                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>