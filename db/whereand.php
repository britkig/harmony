<?php namespace DB;
final class WhereAnd extends WhereGroup{
	static protected function Glue():string{
		return 'AND';
	}
}