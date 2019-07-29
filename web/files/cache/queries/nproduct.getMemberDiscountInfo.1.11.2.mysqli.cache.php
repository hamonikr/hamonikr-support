<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberDiscountInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
} else
${'member_srl14_argument'} = NULL;if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_member_discount`', '`nproduct_member_discount`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>