<?php namespace Array;

function KeyIsValidType(&$a):bool{
	if(!(\is_null($a)||\is_scalar($a))) return false;
return true;}
