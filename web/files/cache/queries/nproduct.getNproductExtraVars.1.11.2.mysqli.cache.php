<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNproductExtraVars");
$query->setAction("select");
$query->setPriority("");
if(isset($args->item_srl)) {
${'item_srl11_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'in');
${'item_srl11_argument'}->createConditionValue();
if(!${'item_srl11_argument'}->isValid()) return ${'item_srl11_argument'}->getErrorMessage();
} else
${'item_srl11_argument'} = NULL;if(${'item_srl11_argument'} !== null) ${'item_srl11_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name12_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name12_argument'}->createConditionValue();
if(!${'name12_argument'}->isValid()) return ${'name12_argument'}->getErrorMessage();
} else
${'name12_argument'} = NULL;if(${'name12_argument'} !== null) ${'name12_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value13_argument'} = new ConditionArgument('value', $args->value, 'equal');
${'value13_argument'}->createConditionValue();
if(!${'value13_argument'}->isValid()) return ${'value13_argument'}->getErrorMessage();
} else
${'value13_argument'} = NULL;if(${'value13_argument'} !== null) ${'value13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_extra_vars`', '`nproduct_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl11_argument,"in", 'and')
,new ConditionWithArgument('`name`',$name12_argument,"equal", 'and')
,new ConditionWithArgument('`value`',$value13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>