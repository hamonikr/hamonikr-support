<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress102_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress102_argument'}->createConditionValue();
if(!${'ipaddress102_argument'}->isValid()) return ${'ipaddress102_argument'}->getErrorMessage();
} else
${'ipaddress102_argument'} = NULL;if(${'ipaddress102_argument'} !== null) ${'ipaddress102_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress102_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>