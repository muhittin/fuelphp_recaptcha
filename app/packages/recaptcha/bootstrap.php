<?php
/**
 * FuelPHP Recaptcha package.
 *
 * @package    Recaptcha
 * @version    1.0
 * @author     Muhittin Özer
 * @link       http://www.muhittinozer.com
 */

require PKGPATH.'recaptcha'.DS.'recaptchalib.php';


Autoloader::add_classes(array(
	'Recaptcha' => __DIR__.DS.'captcha.php'
));

/*
 * End of file bootstrap.php
*/