<?php

	class menuItem{
		protected $itemName;
		protected $Description;
		protected $price;
		
		
		function __construct($itemName, $description,$price){
				$this->setItemName($itemName);
				$this->setDescription($description);
				$this->setPrice($price);
		}
		public function getItemName(){
			return $this->itemName;
		}
		
		public function setItemName($itemName){
			$this->itemName = $itemName;
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
		}
		$itemq = new menuItem('The WP Burger','Freshly made all-beef patty served up with homefries', 14);
		$itemw = new menuItem('WP Kebobs','Tender cuts of beef and chicken, served with your choice of side', 17);
	
	
?>