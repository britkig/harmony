<?php namespace JSON;
function Encode(&$_, array $a, int $f=\JSON_PRESERVE_ZERO_FRACTION+\JSON_THROW_ON_ERROR+\JSON_NUMERIC_CHECK+\JSON_UNESCAPED_SLASHES):void{
	$_=\json_encode($a,$f);}
