<?php namespace JSON;
function Decode(&$_, string $s):bool{
	if(($s=@\json_decode($s,true,\JSON_THROW_ON_ERROR))===false) return false;
	$_=$s;
	return true;}
