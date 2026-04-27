<?php namespace String;
function FormatV(string $format, array $args):string{
	return \vsprintf($format,$args);}
