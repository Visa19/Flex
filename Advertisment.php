<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Canteen Website</title>
        <style>
            #advertisementContainer {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                background-color: rgba(255, 204, 0, 0.9);
                text-align: center;
                padding: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                transition: transform 0.3s ease-in-out;
                z-index: 9999; /* Ensure the advertisement is on top */
            }

            #closeAdvertisement {
                cursor: pointer;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <style>
            .advertisement::before{
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url("https://media.istockphoto.com/id/1287029258/photo/blurred-images-of-restaurant-and-coffee-shop-cafe-interior-background-and-lighting-bokeh.webp?b=1&s=170667a&w=0&k=20&c=8kgHZbeO_pmQrpLg6nqX6mYFwDdGUxZWmZQq0xHemKM=");
                background-size: cover;
                filter: blur(10px); /* Adjust the blur amount as needed */
                z-index: -1;
            }
        </style>
        <section class="advertisement">
            <div id="advertisementContainer" class="d-flex justify-content-between">
                <div class="p-2">
                    IIT MARKRTTING DAY - 2023
                </div>
                <div class="p-2" id="closeAdvertisement">
                    <strong>X</strong>
                </div>
            </div>

            <div id="advertisementCarousel" class="carousel slide mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width: 70%; padding-bottom: 10%; padding-left: 35%" src="./Advertisment/Product.png" alt="Advertisement 1">
                    </div>
                    <div class="carousel-item">
                        <img style="width: 70%; padding-bottom: 10%; padding-left: 35%" src="./Advertisment/Price.png" alt="Advertisement 2">
                    </div>
                    <!-- Add more carousel items for additional advertisements -->
                </div>
            </div>
        </section>

        <script>
            $(document).ready(function () {
                $('#advertisementCarousel').carousel({
                    interval: 1000, // Time in milliseconds between auto slides
                    pause: 'hover', // Pause on hover
                    wrap: true, // Allow carousel to loop
                });

                // Show the advertisement on page load
                $('#advertisementContainer').css('transform', 'translateY(0)');

                // Close the advertisement and redirect to home.php when the "X" is clicked
                $('#closeAdvertisement').click(function () {
                    $('#advertisementContainer').css('transform', 'translateY(-100%)');
                    window.location.href = 'index.php'; // Replace 'home.php' with your actual URL
                });
            });
        </script>
    </body>
</html>
