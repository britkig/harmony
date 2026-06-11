<?php
final class Settings implements \ArrayAccess{
	private array $data;
	private bool $dirty;
	private string $path;
	
	public function Save(){
		if(!$this->readonly && $this->dirty){
			\file_put_contents($this->path, \json_encode($this->data));
			$this->dirty=false;
		}
	}
	public function offsetExists($offset):bool{return \array_key_exists($offset, $this->data);}
	public function offsetGet($offset){return $this->data[$offset];}
	public function offsetSet($offset, $value){
		if(!\is_scalar($value)) throw new \TypeError('Non-scalar value cannot be stored.');
		$this->dirty=true;
		$this->data[$offset]=$value;
	}
	public function offsetUnset($offset):void{unset($this->data[$offset]);}
	public function __construct(private bool $readonly=false){
		$this->dirty=false;
		$path=\dirname(\debug_backtrace()[0]['file']);
		$path=\implode(\System\DirSeparator, [$path, 'settings.json']);
		$data=\file_get_contents($this->path=$path);
		$data=\json_decode($data, true);
		$this->data=$data;
	}
	public function __destruct(){
		$this->Save();
	}
	public function Discard(bool $readonly=true){
		if(!$this->readonly) $this->readonly=$readonly;
	}
}