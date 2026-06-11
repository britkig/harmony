<?php namespace Crypto\Sodium;
function HexBin(&$_, string $s):void{
	$_=\sodium_hex2bin($s);}