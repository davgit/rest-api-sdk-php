<?php
namespace PayPal\Api;


class Item extends \PPModel {
	/**
	 * Number of items.
	 * @param string $quantity
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}	
	
	/**
	 * Number of items.
	 * @return string
	 */
	public function getQuantity() {
		return $this->quantity;
	}
	
	/**
	 * Name of the item.
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}	
	
	/**
	 * Name of the item.
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Cost of the item.
	 * @param string $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}	
	
	/**
	 * Cost of the item.
	 * @return string
	 */
	public function getPrice() {
		return $this->price;
	}
	
	/**
	 * 3-letter Currency Code
	 * @param string $currency
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;
	}	
	
	/**
	 * 3-letter Currency Code
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}
	
	/**
	 * Number or code to identify the item in your catalog/records.
	 * @param string $sku
	 */
	public function setSku($sku) {
		$this->sku = $sku;
	}	
	
	/**
	 * Number or code to identify the item in your catalog/records.
	 * @return string
	 */
	public function getSku() {
		return $this->sku;
	}
	
}
