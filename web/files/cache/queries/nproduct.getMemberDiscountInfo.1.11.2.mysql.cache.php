<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberDiscountInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_member_discount`', '`nproduct_member_discount`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>