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
        <link rel="stylesheet" href="../assets/css/CustomizeFoodStyle.css">

        <!-- Fontawesome Icon -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <style>
            body{
                background: url("https://media.istockphoto.com/id/1287029258/photo/blurred-images-of-restaurant-and-coffee-shop-cafe-interior-background-and-lighting-bokeh.webp?b=1&s=170667a&w=0&k=20&c=8kgHZbeO_pmQrpLg6nqX6mYFwDdGUxZWmZQq0xHemKM=");
            }
            
            .header{
                background-color: #333;
                color: wheat;
            }
            
            .panel{
                background-color: rgba(0, 0, 0, 0.9);
                border: 3px solid #E88F2A;
            }
        </style>

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
                        <a href="AdminHome.php" style="color: wheat;">
                            <span class="material-icons-outlined">dashboard</span> Home
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="AdminCustomizeFood.php" style="color: wheat;">
                            <span class="material-icons-outlined">inventory_2</span> Customize Food
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined">fact_check</span> Manage Transaction 
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;" style="color: wheat;">
                            REPORTS
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined">poll</span> Transaction Reports
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;" style="color: wheat;">
                            MAINTENANCE
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined"><i class="fa fa-server" aria-hidden="true"></i></span> Category List
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- End Sidebar -->

            <!-- Main -->
            <div class="dashboard">
                <div class="panel rice-panel">
                    <i class="fas fa-utensils panel-icon" style="color: #E88F2A;"></i>
                    <a href="./AdminAddPopularFoodDetails.php" id="Textdecoration"><h2 style="color: #E88F2A;">POPULAR FOODS</h2></a>
                </div>
                <div class="panel curry-panel">
                    <i class="fas fa-pepper-hot panel-icon" style="color: #E88F2A;"></i>
                    <a href="#" id="Textdecoration"><h2 style="color: #E88F2A;">Content Management</h2></a>
                </div>
                <div class="panel spice-panel">
                    <i class="fas fa-pepper-hot panel-icon" style="color: #E88F2A;"></i>
                    <a href="#" id="Textdecoration"><h2 style="color: #E88F2A;">Settings</h2></a>
                </div>
            </div>
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
