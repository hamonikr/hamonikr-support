<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSalesInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate6_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate6_argument'}->createConditionValue();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
} else
${'regdate6_argument'} = NULL;if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('COUNT(`total_price`)', '`count`')
,new SelectExpression('SUM(`total_price`)', '`amount`')
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal")
,new ConditionWithoutArgument('`order_status`',"'6'","in", 'and')
,new ConditionWithArgument('`regdate`',$regdate6_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>