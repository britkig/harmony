<?php namespace JSON;

function Encode(array &$a, array $b):bool{
  $c=\json_encode($b);
    if(!\is_string($c)) return false;
  $a=$c;
return true;}
