<?php namespace IO;
function FilePut(string $p, string $d):bool{
	return @\file_put_contents($p, $d)!==false;}
