<?php
abstract class Base{
	private readonly \ReflectionObject $_meta;
	protected final function HasAttribute(string $p, string $a):bool{
		return (bool)$this->_meta->getProperty($p)->getAttributes($a::class);
	}
	final function MapV(array $d, ?array $t):void{
		if($t){
			foreach($t as $a=>$b){
				
			}
		}else{
			foreach($d as $a=>$b)
				if(\is_string($a))
					if(\property_exists($this,$a))
						$this->$a=$b;
		}
	}
	final Function Map(array $d, ... $t):void{
		MapV($d, $t);
	}
	#[\Override]
	protected function Initialise():void{}
	function __construct(array $d=[], ?array $t){
		$this->_meta=new \ReflectionObject($this);
		$this->initialize();
		if($d)
			$this->MapV($d, $t);
	}
}
