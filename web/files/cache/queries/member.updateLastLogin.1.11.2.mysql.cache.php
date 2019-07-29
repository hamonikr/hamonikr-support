<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl103_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl103_argument'}->checkFilter('number');
${'member_srl103_argument'}->checkNotNull();
if(!${'member_srl103_argument'}->isValid()) return ${'member_srl103_argument'}->getErrorMessage();
if(${'member_srl103_argument'} !== null) ${'member_srl103_argument'}->setColumnType('number');

${'last_login104_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login104_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login104_argument'}->checkNotNull();
if(!${'last_login104_argument'}->isValid()) return ${'last_login104_argument'}->getErrorMessage();
if(${'last_login104_argument'} !== null) ${'last_login104_argument'}->setColumnType('date');

${'member_srl105_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl105_argument'}->checkFilter('number');
${'member_srl105_argument'}->checkNotNull();
${'member_srl105_argument'}->createConditionValue();
if(!${'member_srl105_argument'}->isValid()) return ${'member_srl105_argument'}->getErrorMessage();
if(${'member_srl105_argument'} !== null) ${'member_srl105_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl103_argument'})
,new UpdateExpression('`last_login`', ${'last_login104_argument'})
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl105_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>