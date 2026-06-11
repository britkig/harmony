<?php
final class MUI implements \ArrayAccess{
	private static $native;
	private array $_;
	public function GetAll():array{return $this->_;}
	public function offsetExists($offset){return \Array\HasKey($offset,$this->_);}
	public function offsetGet($offset){return $this->_[$offset] ?? null;}
	public function offsetSet($offset, $value){}	// R.O.
	public function offsetUnset($offset){}	// R.O.
	public function __construct(array $codes=[]){
		$this->_=[];
		\Array\Append($codes,'default');
		$p=\System\Backtrace()[0]['file'];
		$p=\String\JoinV(\System\DirSeparator,[\dirname($p),'.mui',\basename($p)]);
		foreach($codes as $c)
			if(\String\Is($c) && $c)
				if(@\IO\FileRead($c,\String\JoinV(\System\DirSeparator,[$p,\String\Lower($c).'.json'])))
					if(\JSON\Decode($this->_,$c))
						break;
		if(!$this->_) throw new \RuntimeException('Cannot open or read any language files.');
	}
	public function __debugInfo():array{
		return $this->_ ?? [];
	}
	static public function InNativeLanguage(string $code):false|string{
		return (static::$native ??=new static(['native']))[$code] ?? false;
	}
}