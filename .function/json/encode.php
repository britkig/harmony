<?php namespace JSON;
function Encode(&$_, array $a):bool{
	if(($a=@\json_encode($a,\JSON_PRESERVE_ZERO_FRACTION+\JSON_THROW_ON_ERROR+\JSON_NUMERIC_CHECK+\JSON_UNESCAPED_SLASHES))===false) return false;
	$_=$a;
	return true;}
