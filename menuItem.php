<?php

/**
 * Description of menuItem
 *
 * @author Matt
 */
class menuItem {
    private $itemName;
    private $price;
    private $description;
    
    
    function __construct($itemName, $price, $description) {
        $this->itemName = $itemName;
        $this->description = $description;
        $this->price = $price;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function setPrice($price){
        $this->price = $price;
    }
    
    public function getItemName(){
        return $this->itemName;
    }
    
    public function setItemName($itemName){
        $this->itemName = $itemName;
    }
    
    
}

?>
