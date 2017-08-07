<?php

require_once(__DIR__."/vendor/autoload.php");

//use dmykos\dhelper\helper\Showx;

if (!function_exists('showx')) {
	/**
	 * Alias of Show::showx().
	 */
	function showx($var, $commented=false)
	{
		dmykos\dhelper\helper\Show::showxDump($var, $commented);
	}


}
if (!function_exists('show')) {
	/**
	 * Alias of Show::show().
	 */
	function show($var, $commented=false)
	{
		dmykos\dhelper\helper\Show::showDump($var, $commented);
	}


}