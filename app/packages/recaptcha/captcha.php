<?php

class Recaptcha {

	private static $_public_key;
	private static $_private_key;

	public static function _init()
	{
		Config::load("recaptcha");
		$public 	= Config::get("public_key");
		$private 	= Config::get("private_key");
		self::$_public_key 		= $public;
		self::$_private_key 	= $private;
	}

	public static function mailhide_html($email)
	{
		return recaptcha_mailhide_html(self::$_public_key, self::$_private_key, $email);
	}

	public static function mailhide_url($url)
	{
		return recaptcha_mailhide_url(self::$_public_key, self::$_private_key, $url);
	}

	public static function check_answer()
	{
		return recaptcha_check_answer (self::$_private_key, Input::ip(), Input::post("recaptcha_challenge_field"), Input::post("recaptcha_response_field"));
	}

	public static function get_html($error)
	{
		return recaptcha_get_html(self::$_public_key, $error);
	}

}