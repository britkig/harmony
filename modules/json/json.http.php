<?php namespace JSON;
  const HTTP_MIME='application/json';

function EncodeHTTP(array &$a):bool{
  if(!Encode($b,$a)) return false;
  if(!\HTTP\Response($b,HTTP_MIME)) return false;
return true;}
