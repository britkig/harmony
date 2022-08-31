<?php namespace Discord\Markup;

const CODE='`%s`';
function Code(string $a, string $b=null):string{
	return \sprintf(CODE,$a,$b);
}

const CODE_BLOCK='```%s
%s```';
function CodeBlock(string $a, string $b=null):string{
	return \sprintf(CODE_BLOCK,$b,$a);
}

const MENTION_CHANNEL='<#%s>';
function MentionChannel(int $a):string{
	return \sprintf(MENTION_CHANNEL,$a);
}

const MENTION_USER='<@%s>';
function MentionUser(int $a):string{
	return \sprintf(MENTION_USER,$a);
}

const TIMEDATE='`<t:%s%s>`';
const TIMEDATE_DATELONG=':D';
const TIMEDATE_DATESHORT=':d';
const TIMEDATE_FULLLONG=':F';
const TIMEDATE_FULLSHORT=':f';
const TIMEDATE_RELATIVE=':R';
const TIMEDATE_TIMELONG=':T';
const TIMEDATE_TIMESHORT=':t';

function TimeDate(int $a, string $b=TIMEDATE_FULLLONG):string{
	return \sprintf(TIMEDATE,$a,$b);
}
