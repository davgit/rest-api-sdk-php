<?php
namespace PayPal\Api;


class Address extends \PPModel {
	/**
	 * Line 1 of the Address (eg. number, street, etc).
	 * @param string $line1
	 */
	public function setLine1($line1) {
		$this->line1 = $line1;
	}	
	
	/**
	 * Line 1 of the Address (eg. number, street, etc).
	 * @return string
	 */
	public function getLine1() {
		return $this->line1;
	}
	
	/**
	 * Optional line 2 of the Address (eg. suite, apt #, etc.).
	 * @param string $line2
	 */
	public function setLine2($line2) {
		$this->line2 = $line2;
	}	
	
	/**
	 * Optional line 2 of the Address (eg. suite, apt #, etc.).
	 * @return string
	 */
	public function getLine2() {
		return $this->line2;
	}
	
	/**
	 * City name.
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}	
	
	/**
	 * City name.
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * 2 letter country code.
	 * @param string $country_code
	 */
	public function setCountryCode($country_code) {
		$this->country_code = $country_code;
	}	
	
	/**
	 * 2 letter country code.
	 * @return string
	 */
	public function getCountryCode() {
		return $this->country_code;
	}
	
	/**
	 * Zip code or equivalent is usually required for countries that have them. For list of countries that do not have postal codes please refer to http://en.wikipedia.org/wiki/Postal_code.
	 * @param string $postal_code
	 */
	public function setPostalCode($postal_code) {
		$this->postal_code = $postal_code;
	}	
	
	/**
	 * Zip code or equivalent is usually required for countries that have them. For list of countries that do not have postal codes please refer to http://en.wikipedia.org/wiki/Postal_code.
	 * @return string
	 */
	public function getPostalCode() {
		return $this->postal_code;
	}
	
	/**
	 * 2 letter code for US states, and the equivalent for other countries.
	 * @param string $state
	 */
	public function setState($state) {
		$this->state = $state;
	}	
	
	/**
	 * 2 letter code for US states, and the equivalent for other countries.
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * Phone number in E.123 format.
	 * @param string $phone
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}	
	
	/**
	 * Phone number in E.123 format.
	 * @return string
	 */
	public function getPhone() {
		return $this->phone;
	}
	
}
