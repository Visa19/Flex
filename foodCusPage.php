<?php
require './classes/RiceDetails.php';

include './classes/CurryDetails.php';

include './classes/SpiceLevel.php';

include './classes/PortionSize.php';

include './classes/ExtraIngredients.php';

require './classes/DbConnector.php';

try {
    $db_con = new \classes\DbConnector();
    $con = $db_con->getConnection();
} catch (PDOException $exc) {
    echo "Error: " . $exc->getMessage();
}
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
        <link rel="stylesheet" href="./assets/css/foodCusPage.css">

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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
        <!--NavigationBar start-->
        <section class="ftco-section" style="background: linear-gradient(#E88F2A, black); color: white;">
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
            <div>
                <section class="header-main" style="color: white;">
                    <div class="container-fluid">
                        <div class="row p-2 pt-3 d-flex align-items-center">
                            <div class="col-md-2">
                                <img  class="d-none d-md-flex ps-3" src="./assets/image/Logo.png" width="100">
                            </div>
                            <div class="col-md-7">
                                <form>
                                    <div class="d-flex form-inputs">
                                        <input class="form-control" type="text" placeholder="Search any Food...">
                                        <button>
                                            <i style="color: black;" class="fa fa-search fa-2x" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
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
            </div>
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
        </section>
        <!--NavigationBar end-->


        <!--main part Start-->
        <div class="container" id="container" style="">
            <form action="" method="POST" style="width:100%">
                <table>
                    <tr>
                        <th>
                            <div id="header">Customize Your Food Order</div>
                        </th>
                    </tr>

                    <!-- Rice Selection -->
                    <fieldset>
                        <tr>
                            <th>
                        <legend><h4>Rice Selection</h4></legend>
                        </th>
                        </tr>
                        <div class="option-group">
                            <?php
                            try {
                                $rs1 = \classes\RiceDetails::GetRiceDetails($con);
                                foreach ($rs1 as $rice){
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="form-check"  id="foodItem">
                                                <input class="form-check-input" type="radio" name="rice" id="basmati" value="<?php echo $rice->GetRiceIdByRiceName($rice->getRice_name(), $con) ?>" checked>
                                                <label class="form-check-label" for="basmati"><?php echo $rice->getRice_name(); ?> - Rs <?php echo $rice->getRice_price(); ?></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } catch (Exception $exc) {
                                die("ERROR" . $exc->getMessage());
                            }
                            ?>
                        </div>
                    </fieldset>

                    <!-- Curry Selection -->
                    <fieldset>
                        <tr>
                            <th>
                        <legend><h4>Curry Selection</h4></legend>
                        </th>
                        </tr>
                        <div class="option-group">
                            <?php 
                                try{
                                    $rs2 = classes\CurryDetails::GetCurryDetails($con);
                                    foreach ($rs2 as $curry){
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="form-check" id="foodItem">
                                                    <input class="form-check-input" type="checkbox" name="curry" id="chicken" value="<?php echo $curry->GetCurryIdByCurryName($curry->getCurry_name(), $con); ?>">
                                                    <label class="form-check-label" for="chicken"><?php echo $curry->getCurry_name(); ?> - Rs <?php echo $curry->getCurry_price(); ?></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } catch (Exception $exc){
                                    die("ERROR" . $exc->getMessage());
                                }
                            ?>
                        </div>
                    </fieldset>


                    <!-- Spice Level -->
                    <div class="option-group">
                        <tr>
                            <td>
                                <div class="option-group">
                                    <h4>
                                        <label for="spice">Spice Level:</label>
                                    </h4>
                                    <select class="custom-select" id="spice">
                                        <?php 
                                            try{
                                                $rs3 = classes\SpiceLevel::GetSpicyDetails($con);
                                                foreach ($rs3 as $spicy){
                                                    ?>
                                                    <option value="<?php echo $spicy->GetSpiceLevelIdBySpiceLevelName($spicy->getSpice_level(), $con); ?>">
                                                        <?php echo $spicy->getSpice_level(); ?>
                                                    </option>
                                                    <?php
                                                }
                                            } catch (Exception $exc){
                                                die("ERROR" . $exc->getMessage());
                                            }
                                        ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </div>

                    <!-- Portion Size -->
                    <div class="option-group">
                        <tr>
                            <td>
                                <h4>
                                    <label for="portion">Portion Size:</label>
                                </h4>
                                <select class="custom-select" id="spice">
                                    <?php 
                                    try{
                                        $rs4 = classes\PortionSize::GetPortionSizeDetails($con);
                                        foreach ($rs4 as $portion){
                                            ?>
                                            <option value="<?php echo $portion->getPortionIdByPortionName($portion->getPortion_size_name(), $con); ?>">
                                                <?php echo $portion->getPortion_size_name(); ?>
                                            </option>
                                            <?php
                                        }
                                    } catch (Exception $exc){
                                        die("ERROR" . $exc->getMessage());
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </div>
                    <!-- Extra Ingredients -->
                    <fieldset>
                        <tr>
                            <th>
                        <legend><h4>Extra Ingredients</h4></legend>
                        </th>
                        </tr>
                        <div class="option-group">
                            <?php 
                               try{
                                   $rs5 = classes\ExtraIngredients::GetExtraIngredientDetails($con);
                                    foreach ($rs5 as $extra){
                                        ?>
                                        <tr>
                                             <td>
                                                 <div class="form-check" id="foodItem">
                                                     <input class="form-check-input" type="checkbox" name="extra" id="onions" value="<?php echo $extra->getExtraIngredientIdByName($extra->getExtra_ingredients_name(), $con); ?>">
                                                     <label class="form-check-label" for="onions"><?php echo $extra->getExtra_ingredients_name(); ?> - Rs <?php echo $extra->getExtra_ingredients_price(); ?></label>
                                                 </div>
                                             </td>
                                         </tr>
                                        <?php
                                    }
                               } catch (Exception $exc){
                                   die("ERROR" . $exc->getMessage());
                               }
                            ?>
                        </div>
                    </fieldset>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-secondary btn-order">Place Order - Total: $</button>
                        </td>
                    </tr>
                    <!-- Order Button -->
                </table>
            </form>
        </div>

        <!-- Bootstrap JS (Optional, for certain features like dropdowns) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!--main part End-->



        <!-- Footer Start -->
        <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 50px; padding-bottom: 30 px;">
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
                                    <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Home</a>
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
        <!-- Footer End -->
    </div>
    <?php
    // put your code here
    ?>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>