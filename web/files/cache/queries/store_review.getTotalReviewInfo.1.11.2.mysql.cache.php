<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalReviewInfo");
$query->setAction("select");
$query->setPriority("");

${'item_srl5_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl5_argument'}->checkNotNull();
${'item_srl5_argument'}->createConditionValue();
if(!${'item_srl5_argument'}->isValid()) return ${'item_srl5_argument'}->getErrorMessage();
if(${'item_srl5_argument'} !== null) ${'item_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('COUNT(`voted_count`)', '`count`')
,new SelectExpression('SUM(`voted_count`)', '`sum`')
));
$query->setTables(array(
new Table('`hme_store_review`', '`store_review`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>