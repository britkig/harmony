<?php namespace Sodium;

function SignVerifyDetached(string $s,string $m, string $pk):bool{
	return \sodium_crypto_sign_verify_detached($s,$m,$pk);
}
