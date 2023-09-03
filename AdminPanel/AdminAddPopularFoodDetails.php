<?php
require_once '../classes/PopularFoodDetails.php';
require_once '../classes/DbConnector.php';

$dbcon = new \classes\DbConnector();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Dashboard</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap Link -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/css/AdminPanel.css">

        <!-- Fontawesome Icon -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="grid-container">

            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>
                <div class="header-left">
                    <span></span>
                </div>
                <div class="header-right">
                    <span class="material-icons-outlined">account_circle</span> Lilani Ranjan
                </div>
            </header>
            <!-- End Header -->

            <!-- Sidebar -->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-brand">
                        <span class="material-icons-outlined"></span>ADMIN PANEL
                    </div>
                    <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
                </div>

                <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <a href="AdminHome.php">
                            <span class="material-icons-outlined">dashboard</span> Home
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="AdminCustomizeFood.php">
                            <span class="material-icons-outlined">inventory_2</span> Customize Food
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#">
                            <span class="material-icons-outlined">fact_check</span> Manage Transaction 
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;">
                            REPORTS
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#">
                            <span class="material-icons-outlined">poll</span> Transaction Reports
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;">
                            MAINTENANCE
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#">
                            <span class="material-icons-outlined"><i class="fa fa-server" aria-hidden="true"></i></span> Category List
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- End Sidebar -->

            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold"></p>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                    if (isset($_POST['popular_food_image_file'], $_POST['popular_food_name'], $_POST['popular_food_default_price'], $_POST['popular_food_current_price'], $_POST['popullar_food_vote'])) {
                        $popular_food_image_file = $_POST['popular_food_image_file'];
                        $popular_food_name = $_POST['popular_food_name'];
                        $popular_food_default_price = $_POST['popular_food_default_price'];
                        $popular_food_current_price = $_POST['popular_food_current_price'];
                        $popullar_food_vote = $_POST['popullar_food_vote'];

                        try {
                            $popular_food_details = new PopularFoodDetails($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popullar_food_vote);
                            $pstmt = $popular_food_details->addPopularFoodDetails($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popullar_food_vote);
                            if ($pstmt) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    Added Successfully
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    Added Failed!
                                </div>
                                <?php
                            }
                        } catch (PDOException $exc) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo "An error occurred: " . $exc->getMessage(); ?>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            ERROR OCCUR!
                        </div>
                        <?php
                    }
                }
                ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <div id="cardStyle" class="card mx-auto shadow p-3 mb-5 bg-body rounded" style="width: 50%;;">
                        <div class="card-header text-center"><h4 style="color: #008080;">ADD NEW POPULAR FOOD</h4></div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group my-2">
                                    <label for="popular_food_image_file">Popular Food Image :</label>
                                    <input name="popular_food_image_file" type="url" id="popular_food_image_file" class="form-control"/>  
                                </div>
                                <div class="form-group my-2">
                                    <label for="popular_food_name">Popular Food Name :</label>
                                    <input name="popular_food_name" type="text" id="popular_food_name" class="form-control"/>
                                </div>
                                <div class="form-group my-2">
                                    <label for="popular_food_default_price">DefaultPrice :</label>
                                    <input name="popular_food_default_price" type="number" id="popular_food_default_price" class="form-control" />
                                </div>
                                <div class="form-group my-2">
                                    <label for="popular_food_current_price">Current Price :</label>
                                    <input name="popular_food_current_price" type="number" id="popular_food_current_price" class="form-control" />
                                </div>
                                <div class="form-group my-2">
                                    <label for="popullar_food_vote">Food vote count :</label>
                                    <input name="popullar_food_vote" type="number" id="popullar_food_vote" class="form-control" />
                                </div>
                                <button type="submit" name="submit" class="mt-3 btn btn-secondary btn-lg btn-block form-control">ADD POPULAR FOOD</button>
                            </div>
                        </div>
                    </div>
                </form>

            </main>
            <!-- End Main -->

        </div>

        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
