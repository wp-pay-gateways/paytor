<?php

class Pronamic_WP_Pay_Gateways_Paytor_Integration {
	public function __construct() {
		$this->id            = 'paytor';
		$this->name          = 'Paytor';
		$this->url           = 'http://paytor.com/';
		$this->dashboard_url = 'http://paytor.com/';
		$this->provider      = 'paytor';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Mollie_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Mollie_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Mollie_Gateway';
	}
}
