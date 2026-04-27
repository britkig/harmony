<?php namespace IO;
function LastModified(&$result,string$path):bool{
	if(!Exists($path)) return false;
	if(!($path=@\filemtime($path))) return false;
	$result=$path;
	return true;}