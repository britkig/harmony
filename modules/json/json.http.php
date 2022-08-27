<?php namespace JSON;
  const MIME='application/json';

function EncodeHTTP(array &$a):bool{
  if(!Encode($b,$a)) return false;
  if(!\HTTP\Response($b,MIME)) return false;
return true;}
