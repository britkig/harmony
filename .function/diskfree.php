<?php namespace IO;
function DiskFree(string$path=__DIR__):float{
	return \disk_free_space($path);}