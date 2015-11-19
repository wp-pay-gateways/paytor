<?php

class Pronamic_WP_Pay_Gateways_Paytor_Integration extends Pronamic_WP_Pay_Gateways_Mollie_Integration {
	public function __construct() {
		$this->id            = 'paytor';
		$this->name          = 'Paytor';
		$this->url           = 'http://paytor.com/';
		$this->dashboard_url = 'http://paytor.com/';
		$this->provider      = 'paytor';
	}
}
