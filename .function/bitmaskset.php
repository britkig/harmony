<?php
function BitmaskSet(int &$var, int|BackedEnum $mask){
	\EnumToInt($mask);
	$var |= $mask;
}