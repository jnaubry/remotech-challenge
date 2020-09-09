<?php

	/*==================
	* OrderBook class
	* Description:
	* 	Class to track “open” orders for both buyers and sellers
	* version: 0.1
	==================*/

	class OrderBook {
		
		private $ordersArray;
		public $orderId = 0;

		// Default constructor
		public function __construct() {
			$this->ordersArray = array();
		}

		/*
			Name: addOpenOrder	
			Description: Add a new open order for a given side
			Parameters:
				$side => BUY or SELL  
				$price
			Return: unique order ID
		*/
		public function addOpenOrder($side, $price) {
			$this->ordersArray = array($side => $price);
			$this->orderId++;
			return $this->orderId;
		}	

		public function deleteOpenOrder($orderId) {

		}

		public function bestOpenOrder($side) {

		}

		public function executeBestOpenOrder($side) {

		}

	}

?>