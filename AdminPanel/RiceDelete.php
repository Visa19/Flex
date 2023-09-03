<?php

require '../classes/RiceDetails.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $rice_id = $_GET["id"];
        
        if(\classes\RiceDetails::deleteRiceDetails($con, $rice_id)){
            echo "Book deleted successfully.";
            header("Location: AdminRiceManage.php");
        } else {
            echo "Fail in delete the Rice";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

