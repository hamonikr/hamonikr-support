<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountByIp");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress4_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress4_argument'}->checkNotNull();
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');

${'count5_argument'} = new Argument('count', $args->{'count'});
${'count5_argument'}->checkNotNull();
if(!${'count5_argument'}->isValid()) return ${'count5_argument'}->getErrorMessage();
if(${'count5_argument'} !== null) ${'count5_argument'}->setColumnType('number');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

${'last_update7_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update7_argument'}->isValid()) return ${'last_update7_argument'}->getErrorMessage();
if(${'last_update7_argument'} !== null) ${'last_update7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress4_argument'})
,new InsertExpression('`count`', ${'count5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
,new InsertExpression('`last_update`', ${'last_update7_argument'})
));
$query->setTables(array(
new Table('`hme_member_login_count`', '`member_login_count`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>