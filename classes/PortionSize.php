<?php

namespace classes;

use PDO;

class PortionSize {
    private $portion_size_name;
    
    function __construct($portion_size_name) {
        $this->portion_size_name = $portion_size_name;
    }
    
    function getPortion_size_name() {
        return $this->portion_size_name;
    }

    function setPortion_size_name($portion_size_name) {
        $this->portion_size_name = $portion_size_name;
    }

    public static function GetPortionSizeDetails($con){
        $portion_details = array();
        $query = "SELECT * FROM PortionSize";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
            $portion_size_name = $row['portion_size_name'];
            
            $portion_size_details = new PortionSize($portion_size_name);
            $portion_details[] = $portion_size_details;
        }
        
        return $portion_details;
    }
    
    public function getPortionIdByPortionName($portion_name, $con){
        $query = "SELECT portion_size_Id FROM PortionSize WHERE portion_size_name  = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $portion_name);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            return $row['portion_size_Id'];
        } else {
            return null;
        }
    }

}
