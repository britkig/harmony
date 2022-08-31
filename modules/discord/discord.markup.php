<?php namespace Discord\Markup;

const Code='`%s`';
function Code(string $a, string $b=null):string{
	return \sprintf(Code,$a,$b);
}

const CodeBlock='```%s
%s```';
function CodeBlock(string $a, string $b=null):string{
	return \sprintf(CodeBlock,$b,$a);
}

const MentionChannel='<#%s>';
function MentionChannel(int $a):string{
	return \sprintf(MentionChannel,$a);
}

const MentionUser='<@%s>';
function MentionUser(int $a):string{
	return \sprintf(MentionUser,$a);
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
