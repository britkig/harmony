<?php namespace Discord;

//  Discord Rich Embed object type

final class Embed{

	const COLOR_NONE=0x0;
	const COLOR_RED=0xff3333;
	const COLOR_YELLOW=0xaaaa55;
	const COLOR_GREEN=0x55aa55;
	const COLOR_BLUE=0x5555ff;

	const COLOR_DEFAULT=self::COLOR_NONE;

	private $color=self::COLOR_DEFAULT;
	function Color(null|int $a=COLOR_DEFAULT):void{
		if($a<0) \trigger_error('Embed color cannot be negative.');
		$this->color=$a;
	}

	private $title=null;
	function Title(null|string $a=null):void{
		$this->title=$a;
	}

	private $description=null;
	function Description(null|string $a=null):void{
		$this->description=$a;
	}

	private $thumbnail=null;
	function Thumbnail(null|string $a=null):void{
		$this->thumbnail=($a?['url'=>$a]:null);
	}

	private $fields=null;
	function Fields(null|array $a=null):void{
		if(!$a){
			$fields=null;
			return;
		}
		$b=[];
		foreach(\array_keys($a) as $c){
			if(!\is_string($c)||!\is_string($a[$c])) \trigger_error('Array contains one or more non-string keys or values.',\E_USER_ERROR);
			\array_push($b,['name'=>(string)$c,'value'=>(string)$a[$c]]);
		}
		$this->fields=$b;
	}

	private $image=null;
	function Image(null|string $a=null):void{
		$this->image=($a?['url'=>$a]:null);
	}

	private $footer=null;
	function Footer(null|string $a=null, null|string $b=null):void{
		if(!$a){
			$this->footer=null;
			return;
		}
		$this->footer=['text'=>$a];	
		if($b) $this->footer['icon_url']=$b;
	}

	private $author=null;
	function Author(null|string $a=null, null|string $b=null):void{
		if(!$a){
			$this->author=null;
			return;
		}
		$this->author=['name'=>$a];	
		if($b) $this->author['url']=$b;
	}
	
	private $timestamp=null;

	function Build():array{
		$a=\get_object_vars($this);
		foreach(\array_keys($a) as $b) if(\is_null($a[$b])) unset($a[$b]);
	return $a;}
	
	function __construct(bool $a=true){
		if($a)$this->timestamp=\date(\DATE_ATOM);
	}static function Create(&$_, bool $a=true):void{
		$_=new self($a);
	}

}
