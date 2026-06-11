<?php namespace DB;
final class OrderRandom extends Order{
	function __toString(){
		return 'RAND()';}
}