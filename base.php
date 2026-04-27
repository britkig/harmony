<?php
abstract class Base{

	private readonly \ReflectionObject $_meta;

	final function HasAttribute(string $p,string $a):bool{
		return (bool)$this->_meta->getProperty($p)->getAttributes($a::class);
	}

	#[\Override]
	protected function initialise():void{
		//	No-op: overridable for initialising properties on-create.
	}

	final function __construct(?array $data=[],?array $map=[]){
		$this->$_meta=\ReflectionObject($this);
		$this->initialize();
	}

}
