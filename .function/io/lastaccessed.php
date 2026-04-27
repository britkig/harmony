<?php namespace IO;
function LastAccessed(&$_, string $p):bool{
	if(!Exists($p)) return false;
	if(($p=@\fileatime($p))===false) return false;
	$_=$p;
	return true;}
