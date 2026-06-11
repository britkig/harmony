<?php
function BitmaskAny(int $var, int $mask):bool{
	\EnumToInt($mask);
    return $var & $mask;
}