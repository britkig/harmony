<?php namespace DB;
final class OrderColumn extends Order{
	public string $column;
	public bool $desc=false;
	function __toString(){
		$_=$this->column;
		if($this->desc) $_.=' DESC';
		return $_;}
}