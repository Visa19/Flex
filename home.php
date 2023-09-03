<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
    </head>
    <body>
        <?php
        $host = 'localhost';
        $dbname = 'flex';
        $username = 'root';
        $password = '';

        try {
            // Connect to the database using PDO
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the form was submitted and the file was uploaded successfully
            if (isset($_POST['submit']) && isset($_FILES['image']['name'])) {
                $imageName = $_FILES['image']['name'];
                $imageTempPath = $_FILES['image']['tmp_name'];

                // Prepare and execute the SQL query to insert image data
                $stmt = $pdo->prepare("INSERT INTO images (image_name, image_data) VALUES (:imageName, :imageData)");
                $stmt->bindParam(':imageName', $imageName);
                $stmt->bindParam(':imageData', $imageData, PDO::PARAM_LOB);

                $imageData = file_get_contents($imageTempPath);
                $stmt->execute();

                echo "Image uploaded successfully.";
            } else {
                echo "Please select an image to upload.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>
