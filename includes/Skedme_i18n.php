<?php

class Skedme_i18n {
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'skedme-io',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
