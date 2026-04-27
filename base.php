<?php
abstract class Base{
	static final function HasAttribute(\ReflectionObject $r, string $p, string $a):bool{
		return (bool)$r->getProperty($p)->getAttributes($a::class);
	}
	final function MapV(array $m, ?array $d):void{
		if($m)
			if($d){
				foreach($d as $a=>$b){
					
				}
			}else{
				foreach($m as $a=>$b)
					if(\is_string($a))
						if(\property_exists($this,$a))
							$this->$a=$b;
			}
	}
	final Function Map(array $m, ... $d):void{
		MapV($m, $d);
	}
	#[\Override]
	protected function Initialise():void{}
	final function __construct(array $d=[], ?array $m){
		$this->initialize();
		$this->MapV($d, $m);
	}
}
