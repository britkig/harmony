<?php namespace Discord\Interactions;

//  Discord Interactions event handler and output conversion

function Response(array$a){
	\JSON\HTTPEncode($a,true);
}

function ResponseMessage(array $b,bool&$c=false):void{
	if(!$c)
    $b['flags']=1<<6;
	$b=['type'=>4,'data'=>$b];
	Response($b);
}

function ResponseString(string $_, bool $p=false):void{
	ResponseMessage(['content'=>$_],$p);
}

function ResponseEmbed(\Discord\Embed &$_, bool$p=false):void{
	$a=$_::Build($_);
	$a=['embeds'=>[$a]];
	ResponseMessage($a,$p);
}

function ResponseEmbedQuick(null|string$a=null,null|string$b=null,null|int$c=null,bool$d=false):void{
	\Discord\Embed::Create($_);
	$_::Color($_,$c);
	$_::Title($_,$b);
	$_::Description($_,$a);
	ResponseEmbed($_,$d);
}

function ResponseAutoComplete(array$a):void{
	$b=[];
	foreach(\array_keys($a)as$c)
		\array_push($b,['name'=>$c,'value'=>$a[$c]]);
	$a=['type'=>8,'choices'=>$b];
	Response($a);
}
