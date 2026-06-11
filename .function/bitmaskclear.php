<?php
function BitmaskClear(int &$var, int|BackedEnum $mask){
	\EnumToInt($mask);
    $var &=~ $mask;
}