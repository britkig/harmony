<?php namespace Sodium;

function VerifyDetached(string $a,string $b, string $c):bool{
	return \sodium_crypto_sign_verify_detached($a,$b,$c);
}
