<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNproductExtraVars");
$query->setAction("select");
$query->setPriority("");
if(isset($args->item_srl)) {
${'item_srl1_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'in');
${'item_srl1_argument'}->createConditionValue();
if(!${'item_srl1_argument'}->isValid()) return ${'item_srl1_argument'}->getErrorMessage();
} else
${'item_srl1_argument'} = NULL;if(${'item_srl1_argument'} !== null) ${'item_srl1_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name2_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name2_argument'}->createConditionValue();
if(!${'name2_argument'}->isValid()) return ${'name2_argument'}->getErrorMessage();
} else
${'name2_argument'} = NULL;if(${'name2_argument'} !== null) ${'name2_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value3_argument'} = new ConditionArgument('value', $args->value, 'equal');
${'value3_argument'}->createConditionValue();
if(!${'value3_argument'}->isValid()) return ${'value3_argument'}->getErrorMessage();
} else
${'value3_argument'} = NULL;if(${'value3_argument'} !== null) ${'value3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_extra_vars`', '`nproduct_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl1_argument,"in", 'and')
,new ConditionWithArgument('`name`',$name2_argument,"equal", 'and')
,new ConditionWithArgument('`value`',$value3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>