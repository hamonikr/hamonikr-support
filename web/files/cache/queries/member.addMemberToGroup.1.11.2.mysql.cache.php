<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl95_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl95_argument'}->checkNotNull();
if(!${'group_srl95_argument'}->isValid()) return ${'group_srl95_argument'}->getErrorMessage();
if(${'group_srl95_argument'} !== null) ${'group_srl95_argument'}->setColumnType('number');

${'member_srl96_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl96_argument'}->checkNotNull();
if(!${'member_srl96_argument'}->isValid()) return ${'member_srl96_argument'}->getErrorMessage();
if(${'member_srl96_argument'} !== null) ${'member_srl96_argument'}->setColumnType('number');

${'site_srl97_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl97_argument'}->ensureDefaultValue('0');
if(!${'site_srl97_argument'}->isValid()) return ${'site_srl97_argument'}->getErrorMessage();
if(${'site_srl97_argument'} !== null) ${'site_srl97_argument'}->setColumnType('number');

${'regdate98_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate98_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate98_argument'}->isValid()) return ${'regdate98_argument'}->getErrorMessage();
if(${'regdate98_argument'} !== null) ${'regdate98_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl95_argument'})
,new InsertExpression('`member_srl`', ${'member_srl96_argument'})
,new InsertExpression('`site_srl`', ${'site_srl97_argument'})
,new InsertExpression('`regdate`', ${'regdate98_argument'})
));
$query->setTables(array(
new Table('`hme_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>