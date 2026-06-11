<?php namespace DB;
final class WhereMatch extends Where{
	public string $field;
	public int|string $value;
	function __toString(){
		if($this->field && $this->value)
			return \String\Format('%s="%s"',$this->field,self::Escape($this->value));
		return '';
	}
}