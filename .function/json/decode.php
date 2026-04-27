<?php namespace JSON;
function Decode(&$_, string $s):void{
	$_=\json_decode($s, true, \JSON_THROW_ON_ERROR);}
