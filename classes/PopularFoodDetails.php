<?php

require 'DbConnector.php';

class PopularFoodDetails {

    private $popular_food_image_file;
    private $popular_food_name;
    private $popular_food_default_price;
    private $popular_food_current_price;
    private $popular_food_vote;

    function __construct($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popular_food_vote) {
        $this->popular_food_image_file = $popular_food_image_file;
        $this->popular_food_name = $popular_food_name;
        $this->popular_food_default_price = $popular_food_default_price;
        $this->popular_food_current_price = $popular_food_current_price;
        $this->popular_food_vote = $popular_food_vote;
    }

    function getPopular_food_image_file() {
        return $this->popular_food_image_file;
    }

    function getPopular_food_name() {
        return $this->popular_food_name;
    }

    function getPopular_food_default_price() {
        return $this->popular_food_default_price;
    }

    function getPopular_food_current_price() {
        return $this->popular_food_current_price;
    }

    function getPopular_food_vote() {
        return $this->popular_food_vote;
    }

    function setPopular_food_image_file($popular_food_image_file) {
        $this->popular_food_image_file = $popular_food_image_file;
    }

    function setPopular_food_name($popular_food_name) {
        $this->popular_food_name = $popular_food_name;
    }

    function setPopular_food_default_price($popular_food_default_price) {
        $this->popular_food_default_price = $popular_food_default_price;
    }

    function setPopular_food_current_price($popular_food_current_price) {
        $this->popular_food_current_price = $popular_food_current_price;
    }

    function setPopular_food_vote($popular_food_vote) {
        $this->popular_food_vote = $popular_food_vote;
    }

    public function addPopularFoodDetails() {
        $dbcon = new classes\DbConnector();
        $con = $dbcon->getConnection();
        $query = "INSERT INTO popularfooddetails (popular_food_image_file, popular_food_name, popular_food_default_price, popular_food_current_price, popula_food_vote) VALUES (?, ?, ?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $this->popular_food_image_file);
        $pstmt->bindValue(2, $this->popular_food_name);
        $pstmt->bindValue(3, $this->popular_food_default_price);
        $pstmt->bindValue(4, $this->popular_food_current_price);
        $pstmt->bindValue(5, $this->popular_food_vote);
        $pstmt->execute();

        return $pstmt->rowCount() > 0;
    }

    public static function displayAllPopularFood() {
        $popular_food_details_list = array();
        $dbcon = new classes\DbConnector();
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM popularfooddetails";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
            $popular_food_image_file = $row['popular_food_image_file'];
            $popular_food_name = $row['popular_food_name'];
            $popular_food_default_price = $row['popular_food_default_price'];
            $popular_food_current_price = $row['popular_food_current_price'];
            $popular_food_vote = $row['popula_food_vote'];

            $popular_food_details = new PopularFoodDetails($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popular_food_vote);

            $popular_food_details_list[] = $popular_food_details;
        }

        return $popular_food_details_list;
    }

}
