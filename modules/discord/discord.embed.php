<?php namespace Discord;

//  Discord Embed object type

final class Embed{
	
	const COLOR_DEFAULT=null;
	const COLOR_RED=0xff3333;
	const COLOR_YELLOW=0xaaaa55;
	const COLOR_GREEN=0x55aa55;
	const COLOR_BLUE=0x5555ff;

	private $timestamp=null;

	private $color=null;
	static function color(self &$_, null|int $a=null):void{
		$_->color=$a;
	}

	private $title=null;
	static function title(self &$_, null|string $a=null):void{
		$_->title=$a;
	}

	private $description=null;
	static function Description(self &$_, null|string $a=null):void{
		$_->description=$a;
	}

	private $footer=null;
	static function Footer(self &$_, null|string $t=null, null|string $i=null):void{
		if(!$t){
			$_->footer=null;
			return;
		}
		$_->footer=['text'=>$t];	
		if($i)
    		$_->footer['icon_url']=$i;
	}

	private $image=null;
	static function Image(self &$_, null|string $a=null):void{
		$_->image=($a?['url'=>$a]:null);
	}

	private $thumbnail=null;
	static function Thumbnail(self &$_, null|string $a=null):void{
		$_->thumbnail=($a?['url'=>$a]:null);
	}

	private $author=null;
	static function Author(self &$_, null|string $a=null):void{
		$_->author=($a?['url'=>$a]:null);
	}

	static function Build(self &$_):array{
		$a=\get_object_vars($_);
		foreach(\array_keys($a) as $b)
			if(\is_null($a[$b]))
       			unset($a[$b]);
	return $a;}

	static function Create(&$_, null|bool $t=true):void{
		$_=new self();
		if($t)$_->timestamp=\date(\DATE_ISO8601);
	}
}
