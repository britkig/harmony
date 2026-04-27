<?php namespace IO;
function Exists(string $path):bool{
	return ExistsFile($path) || ExistsDir($path);}
