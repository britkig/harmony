<?php namespace DB;
abstract Class Stringable extends \Base implements \Stringable{
	private const ESCAPE_PATTERN='`["%\\\\/\']`i',ESCAPE_REPLACE='\\\\$0';
	final static function Escape(string$_):string{
		return \preg_replace(self::ESCAPE_PATTERN,self::ESCAPE_REPLACE,$_);}
}