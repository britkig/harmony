<?php namespace Crypto\Sodium;
function BinHex(&$_, string $s):void{
	$_=\sodium_bin2hex($s);}