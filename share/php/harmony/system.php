<?php	//	Harmony Framework, Common Components

//	Load modules
foreach(glob(implode(DIRECTORY_SEPARATOR,[__DIR__,'*.php'])) as $_)
  require_once $_;
