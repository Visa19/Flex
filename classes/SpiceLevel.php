<?php

namespace classes;

use PDO;

class SpiceLevel {
    private $spice_level;
    
    function __construct($spice_level) {
        $this->spice_level = $spice_level;
    }
    
    function getSpice_level() {
        return $this->spice_level;
    }

    function setSpice_level($spice_level) {
        $this->spice_level = $spice_level;
    }

    public static function GetSpicyDetails($con){
        $spicy_list = array();
        $query = "SELECT * FROM SpiceLevel";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
            $spice_level = $row['spice_level'];
            
            $spice_level_details = new SpiceLevel($spice_level);
            $spicy_list[] = $spice_level_details;
        }
        
        return $spicy_list;
    }
    
    public function GetSpiceLevelIdBySpiceLevelName($spice_level, $con){
        $query = "SELECT spice_level_Id FROM SpiceLevel WHERE spice_level = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $spice_level);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            return $row['spice_level_Id'];
        } else {
            return null;
        }
        
    }

}
