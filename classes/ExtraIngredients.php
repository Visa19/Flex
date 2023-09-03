<?php

namespace classes;

use PDO;

class ExtraIngredients {
    private $extra_ingredients_name;
    private $extra_ingredients_price;
    
    function __construct($extra_ingredients_name, $extra_ingredients_price) {
        $this->extra_ingredients_name = $extra_ingredients_name;
        $this->extra_ingredients_price = $extra_ingredients_price;
    }

    function getExtra_ingredients_name() {
        return $this->extra_ingredients_name;
    }

    function getExtra_ingredients_price() {
        return $this->extra_ingredients_price;
    }

    function setExtra_ingredients_name($extra_ingredients_name) {
        $this->extra_ingredients_name = $extra_ingredients_name;
    }

    function setExtra_ingredients_price($extra_ingredients_price) {
        $this->extra_ingredients_price = $extra_ingredients_price;
    }

    public static function GetExtraIngredientDetails($con){
        $extra_ingredient_details = array();
        $query = "SELECT * FROM ExtraIngredients";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
            $extra_ingredients_name = $row['extra_ingredients_name'];
            $extra_ingredients_price = $row['extra_ingredients_price'];
            
            $extra_ingredient = new ExtraIngredients($extra_ingredients_name, $extra_ingredients_price);
            $extra_ingredient_details[] = $extra_ingredient;
        }
        
        return $extra_ingredient_details;
    }
    
    public function getExtraIngredientIdByName($ingredient_name, $con){
        $query = "SELECT extra_ingredients_Id  FROM ExtraIngredients WHERE extra_ingredients_name = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $extra_ingredients_Id);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $row['extra_ingredients_name'];
        } else {
            return null;
        }
    }
}
