<?php namespace Crypto\Sodium;
function SignVerifyDetached(string $s, string $m, string $k):bool{
	return \sodium_crypto_sign_verify_detached($s, $m, $k);
}
