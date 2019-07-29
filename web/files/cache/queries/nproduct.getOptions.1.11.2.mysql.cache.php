<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOptions");
$query->setAction("select");
$query->setPriority("");

${'item_srl4_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl4_argument'}->checkNotNull();
${'item_srl4_argument'}->createConditionValue();
if(!${'item_srl4_argument'}->isValid()) return ${'item_srl4_argument'}->getErrorMessage();
if(${'item_srl4_argument'} !== null) ${'item_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_options`', '`nproduct_options`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>