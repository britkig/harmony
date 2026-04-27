<?php namespace IO;
function FileRead(&$_, string $p):bool{
	if(!ExistsFile($p)) return false;
	if(($p=@\file_get_contents($p))===false) return false;
	$_=$p;
	return true;}
