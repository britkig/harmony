<?php namespace DB;
final class WhereOr extends WhereGroup{
	static protected function Glue():string{
		return 'OR';
	}
}