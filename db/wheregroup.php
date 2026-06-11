<?php namespace DB;
abstract class WhereGroup extends Where{
	public $wheres;
	abstract static protected function Glue():string;
	final function __toString(){
		$_=\get_object_vars($this);
		$_=$_['wheres'];
		foreach($_ as $a=>$b){
			if($b instanceof where){
				if((!$_[$a]=(string)$b))
						unset($_[$a]);
			}else{
				unset($_[$a]);
			}
		}
		if(!\String\ConcatV($_)) return '';
		$_=\String\JoinV( \String\Format(' %s ', static::Glue()) ,$_);
		return \String\Format('(%s)', $_);
	}
}