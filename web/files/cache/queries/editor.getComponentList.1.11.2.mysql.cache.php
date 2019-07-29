<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComponentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->enabled)) {
${'enabled1_argument'} = new ConditionArgument('enabled', $args->enabled, 'equal');
${'enabled1_argument'}->createConditionValue();
if(!${'enabled1_argument'}->isValid()) return ${'enabled1_argument'}->getErrorMessage();
} else
${'enabled1_argument'} = NULL;if(${'enabled1_argument'} !== null) ${'enabled1_argument'}->setColumnType('char');

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`enabled`',$enabled1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>