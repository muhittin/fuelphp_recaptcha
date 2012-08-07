FuelPHP Re-Captcha Package
==========================
Re-Captcha Package for FuelPHP Framework

Usage
=====

For HTML Output of Captcha:

<pre>
	// Check given captcha
	$response = Recaptcha::check_answer();
	
	if( $response->is_valid )
	{
		// Do anything
	}
	else
	{
		$error = $response->error;
	}
	
	// HTML Output:
	echo Recaptcha::get_html($error);
</pre>

Configuration
=============

You must set your private and public keys into config file on config/recaptcha.php

<pre>
	return array(
		"public_key" 	=> "",
		"private_key"	=> ""
	);
</pre>