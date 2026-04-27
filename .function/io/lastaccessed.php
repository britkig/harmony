<?php namespace IO;
function LastAccessed(&$result,string$path):bool{
	if(!Exists($path)) return false;
	if(!($path=@\fileatime($path))) return false;
	$result=$path;
	return true;}