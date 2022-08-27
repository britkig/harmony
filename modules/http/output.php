<?php namespace HTTP;

function Response(string $a,null|string $b=null):void{
  if(\headers_sent()) exit;
  if($b) \header(\sprintf('Content-Type: %s'),$b);
  echo $a;
exit;}
