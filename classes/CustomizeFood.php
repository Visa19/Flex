<?php

require './DbConnector.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace classes;

class CustomizeFood {
    private $rice_Id;
    private $Curry_Id;
    private $spice_level_Id;
    private $portion_size_Id;
    private $extra_ingredients_Id;
    
    function __construct($rice_Id, $Curry_Id, $spice_level_Id, $portion_size_Id, $extra_ingredients_Id) {
        $this->rice_Id = $rice_Id;
        $this->Curry_Id = $Curry_Id;
        $this->spice_level_Id = $spice_level_Id;
        $this->portion_size_Id = $portion_size_Id;
        $this->extra_ingredients_Id = $extra_ingredients_Id;
    }
    
    function getRice_Id() {
        return $this->rice_Id;
    }

    function getCurry_Id() {
        return $this->Curry_Id;
    }

    function getSpice_level_Id() {
        return $this->spice_level_Id;
    }

    function getPortion_size_Id() {
        return $this->portion_size_Id;
    }

    function getExtra_ingredients_Id() {
        return $this->extra_ingredients_Id;
    }

    function setRice_Id($rice_Id) {
        $this->rice_Id = $rice_Id;
    }

    function setCurry_Id($Curry_Id) {
        $this->Curry_Id = $Curry_Id;
    }

    function setSpice_level_Id($spice_level_Id) {
        $this->spice_level_Id = $spice_level_Id;
    }

    function setPortion_size_Id($portion_size_Id) {
        $this->portion_size_Id = $portion_size_Id;
    }

    function setExtra_ingredients_Id($extra_ingredients_Id) {
        $this->extra_ingredients_Id = $extra_ingredients_Id;
    }



    
    

    
}
