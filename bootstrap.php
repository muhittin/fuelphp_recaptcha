<?php
/**
 * FuelPHP Recaptcha package.
 *
 * @package    Recaptcha
 * @version    1.0
 * @author     Muhittin Özer
 * @link       http://www.muhittinozer.com
 */

require PKGPATH.'recaptcha'.DS.'classes'.DS.'recaptchalib.php';


Autoloader::add_classes(array(
	'Recaptcha' => __DIR__.DS.'classes'.DS.'captcha.php'
));

/*
 * End of file bootstrap.php
*/