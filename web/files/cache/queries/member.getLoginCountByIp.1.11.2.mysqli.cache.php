<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress4_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress4_argument'}->createConditionValue();
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
} else
${'ipaddress4_argument'} = NULL;if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>