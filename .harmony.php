<?php namespace System;

const Root=__DIR__;
const DirSeparator=\DIRECTORY_SEPARATOR;

\set_error_handler(function(int $n, string $s,string $f, int $l){
	if(!(\error_reporting() & $n)) 
		return;
	if($n==\E_DEPRECATED || $n==\E_USER_DEPRECATED)
		return;
	throw new \ErrorException($s, $n, $n, $f, $l);});

function ReturnUnset(&$_){
	$a=$_;unset($_);
	return $a;}

function SecureInclude($_){
	return @include_once ReturnUnset($_);}

\spl_autoload_register(callback:function(string$_):void{
	if(\is_file($_=\implode(DirSeparator,[Root,\strtolower($_).'.php'])))
		SecureInclude($_);});
