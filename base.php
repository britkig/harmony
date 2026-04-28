<?php
abstract class Base{
	private readonly \ReflectionObject $_;
	protected final function HasAttribute(string $p, string $a):bool{
		if(!$this->_->hasProperty($p)) return false;
		return !empty($this->_->getProperty($p)->getAttributes($a::class));
	}
	final function MapV(array $d, ?array $m):void{
		if($m){
			foreach($m as $a=>$b)
				if(\is_string($b) && $b)
					if(\property_exists($this,$b))
						if(\is_string($a) && $a)
							if(\array_key_exists($a,$d))
								$this->$b=$d[$a];
		}else{
			foreach($d as $a=>$b)
				if(\is_string($a) && $a)
					if(\property_exists($this,$a))
						$this->$a=$b;
		}
	}
	final function Map(array $d, ... $m):void{
		MapV($d, $m);
	}
	protected function initialize(){return;}
	function __construct(?array $d=null, ?array $m=null){
		$_=new \ReflectionObject($this);
		$this->initialize();
		if($d) $this->MapV($d,$m);
	}
}
