<?php
require_once './classes/PopularFoodDetails.php';
require_once './classes/DbConnector.php';

$dbcon = new \classes\DbConnector();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <!--CSS Files-->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/HomeStyle.css">
        <link rel="stylesheet" href="./assets/css/home.css">

        <!--Nav Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--Slider Link-->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Oswald:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fontawesome Icon -->
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!--1st Main content Start-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--1st Main content End-->

        <!--Product-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


        <script src="./assets/js/HomeScript.js"></script>
    </head>

    <body id="bodyCon">

        <!--Top Header-->
        <div class="wrap" id="wrap">
            <div class="">
                <div class="row justify-content-between p-2">
                    <div class="col">
                        <p class="ms-5 mb-0 phone" id="phone"><span class="fa fa-phone"></span> <a style="color: #fff;" class="ms-2" href="#">077-1234567</a></p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="social-media" id="socialmedia">
                            <p class="mb-0 d-flex">
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-facebook fa-2x"><i class="sr-only">Facebook</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-twitter fa-2x"><i class="sr-only">Twitter</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-instagram fa-2x"><i class="sr-only">Instagram</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-dribbble fa-2x"><i class="sr-only">Dribbble</i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--NavigationBar-->
        <div style="background: linear-gradient(#E88F2A, black); color: white;">
            <section class="header-main" style="color: white;">
                <div class="container-fluid">
                    <div class="row p-2 pt-3 d-flex align-items-center">
                        <div class="col-md-2">
                            <img  class="d-none d-md-flex ps-3" src="./assets/image/Logo.png" width="100">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex form-inputs">
                                <input class="form-control" type="text" placeholder="Search any Food...">
                                <button>
                                    <i style="color: black;" class="fa fa-search fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="float-right">
                                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                    <a href="#">
                                        <span class="shop-bag"><i class="fa-solid fa-cart-shopping fa-sm"></i></span>
                                    </a>
                                    <div class="d-flex flex-column ms-2">
                                        <span class="qty">0 Food</span>
                                        <span class="fw-bold">$0.00</span>
                                    </div>    
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                <button type="button" class="btn btn-outline-warning btn-lg">Sign In</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>

            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav m-auto" style="font-size: 20px;">
                            <li class="nav-item active"><a href="index.php" class="nav-link mx-3">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-3" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meals</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="#">Page 1</a>
                                    <a class="dropdown-item" href="#">Page 2</a>
                                    <a class="dropdown-item" href="#">Page 3</a>
                                    <a class="dropdown-item" href="#">Page 4</a>
                                </div>
                            </li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Advertisment</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Contact</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">About Us</a></li>
                        </ul>
                        <a id="customization-button" class="btn btn-outline-light" href="foodCusPage.php">Customization</a>
                    </div>
                </div>
            </nav>
        </div>


        <!--home Slider Section-->
        <div style="position: absolute; top:20%;">
            <div class="" >
                <div class="row">
                    <div class="col-md-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img id="sliderImg" src="https://kurinjirestaurant.com/images/1.jpg" alt="">
                                    <div class="carousel-caption">
                                        <h3>Flavorful Excellence</h3><br>
                                        <p style="background-color: rgba(255, 204, 0, 0.9); color: black; border: 1px solid black;">Discover a delectable feast at our Flex—where flavor meets excellence!</p>
                                        <div class="carousel-action">
                                            <a href="#" class="btn btn-primary">MORE AD</a>
                                            <a href="#" class="btn btn-success" style="background-color: rgba(255, 204, 0, 0.9);">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>	
                                <div class="item">
                                    <img id="sliderImg" src="https://www.thetaste.nz/image/cache/catalog/Sliders/12-1900x700.jpg" alt="">
                                    <div class="carousel-caption">
                                        <h3>Flavorful Excellence</h3><br>
                                        <p>Discover a delectable feast at our Flex—where flavor meets excellence!</p>
                                        <div class="carousel-action">
                                            <a href="#" class="btn btn-primary">MORE AD</a>
                                            <a href="#" class="btn btn-success">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img id="sliderImg" src="https://img.freepik.com/premium-photo/plate-sushi-with-salmon-cucumber_865967-43248.jpg" alt="">
                                    <div class="carousel-caption">
                                        <h3>Flavorful Excellence</h3><br>
                                        <p>Discover a delectable feast at our Flex—where flavor meets excellence!</p>
                                        <div class="carousel-action">
                                            <a href="#" class="btn btn-primary">MORE AD</a>
                                            <a href="#" class="btn btn-success">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!--Main 1st content Start-->
            <div class="container">
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="threeMainCard" class="card rounded text-center p-4 mx-4">
                                <div class="card-image">
                                    <img id="customerLoyalityCard" class="img-fluid" src="./assets/image/customerLoyality.png" alt="Alternate Text" />
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h2 id="FirstCard" class="">Customer Loyality</h2>
                                    </div>
                                    <button id="firstCardButton" type="button" class="btn mb-2 mb-md-0 btn-round btn-outline-light">
                                        SEE MORE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="threeMainCard" class="card rounded text-center p-4 mx-4">
                                <div class="card-image">
                                    <img id="customerLoyalityCard" class="img-fluid" src="https://static.vecteezy.com/system/resources/previews/016/765/986/original/steak-fast-food-cartoon-png.png" alt="Alternate Text" />
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h2 id="FirstCard" class="">Meals</h2>
                                    </div>
                                    <button id="firstCardButton" type="button" class="btn mb-2 mb-md-0 btn-round btn-outline-light">
                                        SEE MORE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="threeMainCard" class="card rounded text-center p-4 mx-4">
                                <div class="card-image">
                                    <img id="customerLoyalityCard" class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/7440/7440506.png" alt="Alternate Text" />
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h2 id="FirstCard" class="">Vote For Food</h2>
                                    </div>
                                    <button id="firstCardButton" type="button" class="btn mb-2 mb-md-0 btn-round btn-outline-light">
                                        SEE MORE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main 1st content Ends-->

            <!--Product page Start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="col-md-12" style="text-align: center; padding-top: 50px;">
                            <h2 style="position: relative;">
                                <span style="background-color: #000000; color: #FFFFFF; padding: 5px 15px;">&mdash;</span>
                                <span id="trending-heading" style="color: white;">Popular <b>Foods</b></span>
                                <span style="background-color: #000000; color: #FFFFFF; padding: 5px 15px;">&mdash;</span>
                            </h2>
                        </div>
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="0" style="background: linear-gradient(to bottom, #F9C866, #E88F2A); border: 2px solid #FFFFFF; border-radius: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        
                                        <?php 
                                            $i = 1;
                                            $rs = PopularFoodDetails::displayAllPopularFood();
                                            
                                            foreach ($rs as $popular_food){
                                                
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="<?php echo $popular_food->getPopular_food_image_file(); ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $popular_food->getPopular_food_name(); ?></h4>
                                                    <p class="item-price"><strike style="color: black;">Rs <?php echo $popular_food->getPopular_food_default_price(); ?></strike> <span style="color: white;">Rs <?php echo $popular_food->getPopular_food_current_price();  ?></span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <?php 
                                                            $count = $popular_food->getPopular_food_vote();
                                                            $num = 1;
                                                            while ($num<=5){
                                                                if ($num<=$count){
                                                                    ?>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    <?php
                                                                }
                                                                $num++;
                                                            }
                                                            ?>
<!--                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>-->
                                                        </ul>
                                                    </div>
                                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                                </div>						
                                            </div>
                                        </div>	
                                        <?php 
                                            }
                                            ?>
                                        				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Product page End-->

            <!--Feedback Section Start-->
            <div id="carouselExampleSlidesOnly" class="carousel slide container" data-ride="carousel">
                <div class="row carousel-item active">
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen provides a delightful dining experience with its delicious and diverse menu. <a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen is exceptional! The variety of delicious and affordable food options, along with the friendly staff and clean environment, make it a delightful dining experience for students. <a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen offers a delightful dining experience with delicious and diverse menu options. The food quality, service, and atmosphere create a satisfying and enjoyable place to eat. <a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row carousel-item">
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen provides a delightful dining experience with a diverse menu, friendly staff, and hygienic environment. I always enjoy my meals there! Highly recommended!<a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen offers a delightful experience with a diverse menu, prompt service, and a clean environment. The food is delicious and reasonably priced, making it a top choice for students.<a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                    <section id="feedbackCard" class="py-5 col-lg-4">
                        <div id="container">
                            <div id="blockquote-custom">
                                <div id="blockquote-custom-icon"><i class="fa fa-quote-left text-white"></i></div>
                                <p class="mb-0 mt-2 font-italic">"The Flex canteen is fantastic! It offers a wide variety of delicious and affordable food options. The staff is friendly, and the atmosphere is comfortable. Highly recommended for students! <a href="#" class="text-info">#Flex</a>."</p>
                                <footer id="blockquote-footer" class="pt-4 mt-4 border-top">Someone famous in
                                    <cite title="Source Title">UWU</cite>
                                </footer>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--Feedback Section End-->

            <!-- Footer Start -->
            <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 450px; padding-bottom: 30 px;">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-6 mb-lg-n5">
                            <!--<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 border-inner p-4" style="background-color: #E88F2A ;">-->
                            <a href="index.html" class="navbar-brand pt-5">
                                <img class="px-4" src="./assets/image/Logo.png" alt="Logo" width="350">
                            </a>
                            <!--</div>-->
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row gx-5">
                                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Get In Touch</h4>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-map-marker px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">Uva wellasa University, Badulla</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-envelope-o px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">flex@example.com</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-phone px-3" aria-hidden="true"style="color: #E88F2A;"></i>
                                        <p class="mb-0">+012 345 67890</p>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Quick Links</h4>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="mb-2" href="index.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Home</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>About Us</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Our Services</a>
                                        <a class="" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Newsletter</h4>
                                    <p id="footerSubFont">"Savor delicious meals at our university canteen. Tasty, nutritious, affordable!"</p>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                            <button class="btn" style="background-color: #E88F2A;">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-secondary py-4" style="background: #111111; margin-top: 32 px;">
                <div class="container text-center">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Flex</a>. All Rights Reserved.</p>
                </div>
            </div>
            
        </div>
    <?php
// put your code here
    ?>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
