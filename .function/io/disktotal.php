<?php namespace IO;
function DiskTotal(string $p=__DIR__):bool|float{
	return @\disk_total_space($p);}
