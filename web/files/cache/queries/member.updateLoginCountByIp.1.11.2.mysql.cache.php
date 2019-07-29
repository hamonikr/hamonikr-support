<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountByIp");
$query->setAction("update");
$query->setPriority("");

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->checkNotNull();
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();
if(${'count4_argument'} !== null) ${'count4_argument'}->setColumnType('number');

${'last_update5_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update5_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update5_argument'}->checkNotNull();
if(!${'last_update5_argument'}->isValid()) return ${'last_update5_argument'}->getErrorMessage();
if(${'last_update5_argument'} !== null) ${'last_update5_argument'}->setColumnType('date');

${'ipaddress6_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress6_argument'}->checkNotNull();
${'ipaddress6_argument'}->createConditionValue();
if(!${'ipaddress6_argument'}->isValid()) return ${'ipaddress6_argument'}->getErrorMessage();
if(${'ipaddress6_argument'} !== null) ${'ipaddress6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count4_argument'})
,new UpdateExpression('`last_update`', ${'last_update5_argument'})
));
$query->setTables(array(
new Table('`hme_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>