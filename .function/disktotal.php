<?php namespace IO;
function DiskTotal(string$path=__DIR__):float{
	return \disk_total_space($path);}