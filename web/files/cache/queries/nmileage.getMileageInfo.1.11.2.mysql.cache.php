<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMileageInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl6_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl6_argument'}->createConditionValue();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
} else
${'member_srl6_argument'} = NULL;if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nmileage`', '`nmileage`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>