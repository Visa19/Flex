<?php

namespace classes;

use PDO;

class RiceDetails {

    private $rice_name;
    private $rice_price;

    function __construct($rice_name, $rice_price) {
        $this->rice_name = $rice_name;
        $this->rice_price = $rice_price;
    }

    function getRice_name() {
        return $this->rice_name;
    }

    function getRice_price() {
        return $this->rice_price;
    }

    function setRice_name($rice_name) {
        $this->rice_name = $rice_name;
    }

    function setRice_price($rice_price) {
        $this->rice_price = $rice_price;
    }

    public static function GetRiceDetails($con) {
        $rice_list = array();
        try {
            $query = "SELECT * FROM Rice";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
                $rice_name = $row['rice_name'];
                $rice_price = $row['rice_price'];

                $rice_details = new RiceDetails($rice_name, $rice_price);
                $rice_list[] = $rice_details;
            }
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class GetRiceDetails Method :" . $exc->getMessage());
        }
        return $rice_list;
    }

    public function GetRiceIdByRiceName($rice_name, $con) {
        try {
            $this->con = $con;
            $query = "SELECT rice_Id FROM Rice WHERE rice_name = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $rice_name);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['rice_Id'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class GetRiceIdByRiceName Method :" . $exc->getMessage());
        }
    }

    public function addRiceDetails($con) {
        try {
            $query = "INSERT INTO Rice (rice_name, rice_price) VALUES (?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->rice_name);
            $pstmt->bindValue(2, $this->rice_price);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class addRiceDetails Method: " . $exc->getMessage());
        }
    }

    //    Need to Check

    public function getRiceDetailById($con, $id) {
        $query = "SELECT * FROM Rice WHERE rice_Id = ?";
        $stmt = $con->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new RiceDetails($row['rice_name'], $row['rice_price']);
        } else {
            return null;
        }
    }

    public function updateRiceDetails($con, $id) {
        try {
            $query = "UPDATE Rice SET rice_name = ?, rice_price = ? WHERE rice_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->rice_name);
            $pstmt->bindValue(2, $this->rice_price);
            $pstmt->bindValue(3, $id); // Corrected to $this->id

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class updateRiceDetails Method: " . $exc->getMessage());
        }
    }

    public static function deleteRiceDetails($con, $id) {
        try {
            $obj = new DbConnector();
            $con = $obj->getConnection();
            $query = "DELETE FROM Rice WHERE rice_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class GetRiceIdByRiceName Method :" . $exc->getMessage());
        }
    }

}
