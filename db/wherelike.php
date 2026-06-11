<?php namespace DB;
final class WhereLike extends Where{
	public string $field, $value;
	function __toString():string{
		if($this->field && $this->value)
			return \String\Format('%s LIKE "%%%s%%"',$this->field,self::Escape($this->value));
		return '';
	}
}