<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getQuantityDiscountInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->item_srl)) {
${'item_srl15_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl15_argument'}->createConditionValue();
if(!${'item_srl15_argument'}->isValid()) return ${'item_srl15_argument'}->getErrorMessage();
} else
${'item_srl15_argument'} = NULL;if(${'item_srl15_argument'} !== null) ${'item_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_quantity_discount`', '`nproduct_quantity_discount`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>