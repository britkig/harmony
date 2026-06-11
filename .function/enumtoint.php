<?php
function EnumToInt(int|\BackedEnum &$enum){
	if($enum instanceof \BackedEnum) $_=$enum->value;
	if(!\is_int($_)) throw new \Error('Mask is non-integer.');
	$enum=$_;
}