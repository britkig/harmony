<?php
abstract class Base{
	static final function HasAttribute(\ReflectionObject $r, string $p, string $a):bool{
		return (bool)$r->getProperty($p)->getAttributes($a::class);
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
	final Function Map(array $m, ... $t):void{
		MapV($m, $t);
	}
	#[\Override]
	protected function Initialise():void{}
	final function __construct(array $d=[], ?array $t){
		$this->initialize();
		if($d)
			$this->MapV($d, $t);
	}
}
