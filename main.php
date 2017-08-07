<?php

//require_once(realpath(dirname(__FILE__).'/../..')."/autoload.php");


if (!function_exists('showx')) {
	/**
	 * Alias of Show::showx().
	 */
	function showx($var, $commented=false)
	{
		dmykos\dhelper\Show::showx($var, $commented);
	}


}
if (!function_exists('show')) {
	/**
	 * Alias of Show::show().
	 */
	function show($var, $commented=false)
	{
		dmykos\dhelper\Show::show($var, $commented);
	}


}