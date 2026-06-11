<?php namespace Media;
function ReadEXIF(&$_, string $path):bool{
	if(($path=@\exif_read_data($path))===false) return false;
	$_=$path;
	return true;
}
