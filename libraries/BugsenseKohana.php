<?php defined('SYSPATH') or die('No direct script access.');

class BugsenseKohana_Core {
	public static function setupRequest() {
		$bugsense_config = Kohana::config('bugsense');
		//Kohana::log("info", print_r($bugsense_config, true));
		
		require dirname(__FILE__)."/bugsense-php/bugsense.php";
		
		Bugsense::setup($bugsense_config['api.key']);
		Bugsense::$app_version = $bugsense_config['app.version'];
		Bugsense::$debug = $bugsense_config['debug'];
		Bugsense::$debug_response = $bugsense_config['debug_response'];
		Bugsense::$environment = $bugsense_config['environment'];

		// control which errors are caught with error_reporting
		error_reporting(E_ALL|E_STRICT);
	}
}