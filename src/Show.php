<?php

namespace dmykos\dhelper\helper;


class Show
{
	public static function showDump($var,$commented=false)
	{

		print ($commented ? '<!--pre>' : '<pre>');
		var_dump($var);
		print ($commented ? '</pre-->' : '</pre>');
	}

	public static function showxDump($var,$commented=false) {
		self::showDump($var,$commented);exit;
	}
}
