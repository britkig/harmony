<?php namespace Console;
require_once '.harmony.php';
function Log(string $m, ?string $c){
	echo \String\Format('%s	%s	%s',\date(\DATE_ISO8601),$c,$m).\PHP_EOL;}
