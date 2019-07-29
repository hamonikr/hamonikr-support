<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteNproductExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'item_srl1_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl1_argument'}->checkFilter('number');
${'item_srl1_argument'}->checkNotNull();
${'item_srl1_argument'}->createConditionValue();
if(!${'item_srl1_argument'}->isValid()) return ${'item_srl1_argument'}->getErrorMessage();
if(${'item_srl1_argument'} !== null) ${'item_srl1_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name2_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name2_argument'}->createConditionValue();
if(!${'name2_argument'}->isValid()) return ${'name2_argument'}->getErrorMessage();
} else
${'name2_argument'} = NULL;if(${'name2_argument'} !== null) ${'name2_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`hme_nproduct_extra_vars`', '`nproduct_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl1_argument,"equal")
,new ConditionWithArgument('`name`',$name2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>