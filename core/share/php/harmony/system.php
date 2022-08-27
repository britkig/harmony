<?php namespace System;

abstract class Depends{
	const Depends=Depends;
	const str=['The "%s" PHP extension is not installed, but it is recommended.',
		'"\%s" requires the "%s" PHP extension, which is currently not installed or set up.'
	];
	static function Depends(array$a=null,null|string$b,bool$c=false):bool{
		$d=\get_loaded_extensions();
		foreach((\is_array($a)?$a:static::Depends)as $e)
			if(!\in_array($e,$d)){
				if($c){
					\trigger_error(\sprintf(self::str[0],$e),\E_USER_NOTICE);
				}else{
					\trigger_error(\sprintf(self::str[1],$b,$e),\E_USER_ERROR);
				}
				return false;
			}
	return true;}
}

function Path(string ... $a){
  return implode(DIRECTORY_SEPARATOR,$a);
}

function UnsetReturn(&$a){
	$b=$a;
	unset($a);
	return $b;
}

foreach(glob(Path(__DIR__,'*.php'))as$_)
	require_once UnsetReturn($_);
