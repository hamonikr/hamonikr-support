<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemExtraList");
$query->setAction("select");
$query->setPriority("");

${'module_srl63_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl63_argument'}->checkNotNull();
${'module_srl63_argument'}->createConditionValue();
if(!${'module_srl63_argument'}->isValid()) return ${'module_srl63_argument'}->getErrorMessage();
if(${'module_srl63_argument'} !== null) ${'module_srl63_argument'}->setColumnType('number');

${'sort_index64_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index64_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index64_argument'}->isValid()) return ${'sort_index64_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_item_extras`', '`nproduct_item_extras`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl63_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index64_argument'}, "asc")
));
$query->setLimit();
return $query; ?>