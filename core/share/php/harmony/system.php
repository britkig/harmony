<?php	//	Harmony Framework, Common Components

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
