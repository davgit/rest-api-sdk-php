<?php
namespace PayPal\Api;


class PaymentHistory extends \PPModel {
	/**
	 * A list of Payment resources
	 * @array
	 * @param PayPal\Api\Payment $payments
	 */
	public function setPayments($payments) {
		$this->payments = $payments;
	}	
	
	/**
	 * A list of Payment resources
	 * @return PayPal\Api\Payment
	 */
	public function getPayments() {
		return $this->payments;
	}
	
	/**
	 * Number of items returned in each range of results. Note that the last results range could have fewer items than the requested number of items.
	 * @param integer $count
	 */
	public function setCount($count) {
		$this->count = $count;
	}	
	
	/**
	 * Number of items returned in each range of results. Note that the last results range could have fewer items than the requested number of items.
	 * @return integer
	 */
	public function getCount() {
		return $this->count;
	}
	
	/**
	 * Identifier of the next element to get the next range of results.
	 * @param string $next_id
	 */
	public function setNextId($next_id) {
		$this->next_id = $next_id;
	}	
	
	/**
	 * Identifier of the next element to get the next range of results.
	 * @return string
	 */
	public function getNextId() {
		return $this->next_id;
	}
	
}
