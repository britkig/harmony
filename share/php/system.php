<?php // Harmony Framework, CC BY-NC-SA, Core script

chdir(__DIR__);

foreach(glob('*.php') as $_)
  require_once $_;
