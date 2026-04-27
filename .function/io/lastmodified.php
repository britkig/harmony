<?php namespace IO;
function LastModified(&$_ , string $p):bool{
	if(!Exists($p)) return false;
	if(($p=@\filemtime($p))===false) return false;
	$_=$p;
	return true;}
