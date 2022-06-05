<?php	//	Harmony Framework, CLI Components

//	Load common modules
foreach(glob(implode(DIRECTORY_SEPARATOR,[dirname(__DIR__),'system.php'])) as $_)
	require_once $_;

//	Load modules
foreach(glob(implode(DIRECTORY_SEPARATOR,[__DIR__,'*.php'])) as $_)
	require_once $_;
