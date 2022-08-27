<?php namespace Sodium;

function BinHex(&$a, string $b):void{
  $a=\sodium_bin2hex($b);
}

function HexBin(&$a, string $b, string $c=''):void{
  $a=\sodium_hex2bin($b,$c);
}
