<?php namespace Sodium;

function HexBin(&$a, string $b, string $c=''):void{
  $a=\sodium_hex2bin($b,$c);
}
