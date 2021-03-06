<?php
namespace PayPal\Api;

use PayPal\Rest\IResource;
use PayPal\Rest\Call;
use PayPal\Rest\ApiContext;

class Authorization extends \PPModel implements IResource {
	
	private static $credential;
	
	/**
	 *
	 * @deprected. Pass ApiContext to create/get methods instead
	 */
	public static function setCredential($credential) {
		self::$credential = $credential;
	}
	
	/**
	 * Identifier of the authorization transaction.
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
	}	
	
	/**
	 * Identifier of the authorization transaction.
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Time the resource was created.
	 * @param string $create_time
	 */
	public function setCreateTime($create_time) {
		$this->create_time = $create_time;
	}	
	
	/**
	 * Time the resource was created.
	 * @return string
	 */
	public function getCreateTime() {
		return $this->create_time;
	}
	
	/**
	 * Time the resource was last updated.
	 * @param string $update_time
	 */
	public function setUpdateTime($update_time) {
		$this->update_time = $update_time;
	}	
	
	/**
	 * Time the resource was last updated.
	 * @return string
	 */
	public function getUpdateTime() {
		return $this->update_time;
	}
	
	/**
	 * Amount being authorized for.
	 * @param PayPal\Api\Amount $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}	
	
	/**
	 * Amount being authorized for.
	 * @return PayPal\Api\Amount
	 */
	public function getAmount() {
		return $this->amount;
	}
	
	/**
	 * State of the authorization transaction.
	 * @param string $state
	 */
	public function setState($state) {
		$this->state = $state;
	}	
	
	/**
	 * State of the authorization transaction.
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * ID of the Payment resource that this transaction is based on.
	 * @param string $parent_payment
	 */
	public function setParentPayment($parent_payment) {
		$this->parent_payment = $parent_payment;
	}	
	
	/**
	 * ID of the Payment resource that this transaction is based on.
	 * @return string
	 */
	public function getParentPayment() {
		return $this->parent_payment;
	}
	
	/**
	 * Date/Time until which funds may be captured against this resource.
	 * @param string $valid_until
	 */
	public function setValidUntil($valid_until) {
		$this->valid_until = $valid_until;
	}	
	
	/**
	 * Date/Time until which funds may be captured against this resource.
	 * @return string
	 */
	public function getValidUntil() {
		return $this->valid_until;
	}
	
	/**
	 * 
	 * @array
	 * @param PayPal\Api\Links $links
	 */
	public function setLinks($links) {
		$this->links = $links;
	}	
	
	/**
	 * 
	 * @return PayPal\Api\Links
	 */
	public function getLinks() {
		return $this->links;
	}
	

	public static function get($authorizationId, $apiContext = null) {
		if (($authorizationId == null) || (strlen($authorizationId) <= 0)) {
			throw new \InvalidArgumentException("authorizationId cannot be null or empty");
		}
		$payLoad = "";
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/authorization/$authorizationId", "GET", $payLoad);
		$ret = new Authorization();
		$ret->fromJson($json);
		return $ret;
	}

	public function capture($capture, $apiContext = null) {
		if ($this->getId() == null) {
			throw new \InvalidArgumentException("Id cannot be null");
		}
		if (($capture == null)) {
			throw new \InvalidArgumentException("capture cannot be null or empty");
		}
		$payLoad = $capture->toJSON();
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/authorization/{$this->getId()}/capture", "POST", $payLoad);
		$ret = new Capture();
		$ret->fromJson($json);
		return $ret;
	}

	public function void($apiContext = null) {
		if ($this->getId() == null) {
			throw new \InvalidArgumentException("Id cannot be null");
		}
		$payLoad = "";
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/authorization/{$this->getId()}/void", "POST", $payLoad);
		$ret = new Authorization();
		$ret->fromJson($json);
		return $ret;
	}

	public function reauthorize($apiContext = null) {
		if ($this->getId() == null) {
			throw new \InvalidArgumentException("Id cannot be null");
		}
		$payLoad = $this->toJSON();
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/authorization/{$this->getId()}/reauthorize", "POST", $payLoad);
		$this->fromJson($json);
 		return $this;
	}
}
