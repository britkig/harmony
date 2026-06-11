<?php
function BitmaskAll(int $var, int $mask):bool{
	\EnumToInt($mask);
    return ($var & $mask) == $mask;
}