<?php

namespace dmykos\dhelper;


class Show
{
	public static function show($var,$commented=false)
	{

		print ($commented ? '<!--pre>' : '<pre>');
		var_dump($var);
		print ($commented ? '</pre-->' : '</pre>');
	}

	public static function showx($var,$commented=false) {
		self::show($var,$commented);exit;
	}
}
