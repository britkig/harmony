<?php
abstract class Base{
	private readonly \ReflectionObject $_meta;
	final function HasAttribute(string $p, string $a):bool{
		return (bool)$this->_meta->getProperty($p)->getAttributes($a::class);
	}
	final function Map(array $data,array $map=[]){
		if($data)
			if($map){
				foreach($data as $a=>$b){
					
				}
			}else{
				foreach($data as $a=>$b)
					if(\is_string($a))
						if(\property_exists($this,$a))
							$this->$a=$b;
			}
	}
	#[\Override]
	protected function Initialise():void{}
	final function __construct(?array $data=[],?array $map=[]){
		$this->$_meta=\ReflectionObject($this);
		$this->initialize();
		if($data)
			$this->Map($data, $map);
	}
}
