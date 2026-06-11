<?php namespace DB;
abstract class Escapable extends \Base implements \Stringable{
	private const ESCAPE_PATTERN='`["%\\\\/\']`i',ESCAPE_REPLACE='\\\\$0';
	static function Escape(string$_):string{
		return \preg_replace(self::ESCAPE_PATTERN,self::ESCAPE_REPLACE,$_);}
}