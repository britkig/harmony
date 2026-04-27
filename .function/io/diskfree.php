<?php namespace IO;
function DiskFree(string $p=__DIR__):bool|float{
	return @\disk_free_space($p);}
