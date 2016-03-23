<?php

/**
 * Title: Paytor - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Paytor_Integration extends Pronamic_WP_Pay_Gateways_Mollie_Integration {
	public function __construct() {
		$this->id            = 'paytor';
		$this->name          = 'Paytor';
		$this->url           = 'http://paytor.com/';
		$this->product_url   = 'http://paytor.com/';
		$this->provider      = 'paytor';
	}
}
