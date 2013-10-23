<?php 
/**
 * This is the IM3 base file
 * @package IM3
 * @author Steve Crockett
*/

/** This is the constant defining the application root*/
define('IM3_ROOT_DIR', __DIR__ . '\\');

function whatsTheRootUri ()
{
	$hostname = $_SERVER['HTTP_HOST'];
	$phpSelf = $_SERVER['PHP_SELF'];
	if (strpos($_SERVER['SERVER_PROTOCOL'], 'HTTPS') !== false) {
		$protocol = "https://";
	} elseif ($_SERVER['SERVER_PORT'] === "80") {
		$protocol = "http://";
	}
	if (strpos($phpSelf, '.php') !== false) {
		$phpSelf = explode('/', $phpSelf);
		$phpSelf[(count($phpSelf) - 1)] = '';
		$phpSelf = implode('/', $phpSelf);
	}
	$theUri = $protocol . $hostname . $phpSelf;
	return $theUri;
}

define('IM3_ROOT_URI', whatsTheRootUri());

include(IM3_ROOT_DIR . 'inc/form.php');


