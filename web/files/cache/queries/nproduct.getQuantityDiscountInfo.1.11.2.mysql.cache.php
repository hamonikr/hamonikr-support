<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getQuantityDiscountInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->item_srl)) {
${'item_srl2_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl2_argument'}->createConditionValue();
if(!${'item_srl2_argument'}->isValid()) return ${'item_srl2_argument'}->getErrorMessage();
} else
${'item_srl2_argument'} = NULL;if(${'item_srl2_argument'} !== null) ${'item_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_quantity_discount`', '`nproduct_quantity_discount`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>