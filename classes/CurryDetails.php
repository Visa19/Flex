<?php

namespace classes;

use PDO;

class CurryDetails {
    private $curry_name;
    private $Curry_price;

    function __construct($curry_name, $Curry_price) {
        $this->curry_name = $curry_name;
        $this->Curry_price = $Curry_price;
    }

    function getCurry_name() {
        return $this->curry_name;
    }

    function getCurry_price() {
        return $this->Curry_price;
    }

    function setCurry_name($curry_name) {
        $this->curry_name = $curry_name;
    }

    function setCurry_price($Curry_price) {
        $this->Curry_price = $Curry_price;
    }

    
    public static function GetCurryDetails($con) {
        $curry_list = array();
        $query = "SELECT * FROM Curry";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
            $curry_name = $row['Curry_name'];
            $Curry_price = $row['Curry_price'];

            $curry_details = new CurryDetails($curry_name, $Curry_price);
            $curry_list[] = $curry_details; 
        }

        return $curry_list;
    }

    public function GetCurryIdByCurryName($curry_name, $con) {
        $query = "SELECT Curry_Id FROM Curry WHERE Curry_name = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $curry_name);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $row['Curry_Id'];
        } else {
            return null;
        }
    }

}
