<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFieldsetList");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'list_order2_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order2_argument'}->ensureDefaultValue('list_order');
if(!${'list_order2_argument'}->isValid()) return ${'list_order2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart_orderform_fieldsets`', '`ncart_orderform_fieldsets`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>