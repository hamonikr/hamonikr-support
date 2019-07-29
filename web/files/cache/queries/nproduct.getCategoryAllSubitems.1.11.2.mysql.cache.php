<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryAllSubitems");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->node_route)) {
${'node_route2_argument'} = new ConditionArgument('node_route', $args->node_route, 'like_prefix');
${'node_route2_argument'}->createConditionValue();
if(!${'node_route2_argument'}->isValid()) return ${'node_route2_argument'}->getErrorMessage();
} else
${'node_route2_argument'} = NULL;if(${'node_route2_argument'} !== null) ${'node_route2_argument'}->setColumnType('varchar');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_categories`', '`nproduct_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`node_route`',$node_route2_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "asc")
));
$query->setLimit();
return $query; ?>