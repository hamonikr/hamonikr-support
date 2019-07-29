<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryList");
$query->setAction("select");
$query->setPriority("");

${'module_srl25_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl25_argument'}->checkNotNull();
${'module_srl25_argument'}->createConditionValue();
if(!${'module_srl25_argument'}->isValid()) return ${'module_srl25_argument'}->getErrorMessage();
if(${'module_srl25_argument'} !== null) ${'module_srl25_argument'}->setColumnType('number');
if(isset($args->node_route)) {
${'node_route26_argument'} = new ConditionArgument('node_route', $args->node_route, 'equal');
${'node_route26_argument'}->createConditionValue();
if(!${'node_route26_argument'}->isValid()) return ${'node_route26_argument'}->getErrorMessage();
} else
${'node_route26_argument'} = NULL;if(${'node_route26_argument'} !== null) ${'node_route26_argument'}->setColumnType('varchar');
if(isset($args->node_route_like_prefix)) {
${'node_route_like_prefix27_argument'} = new ConditionArgument('node_route_like_prefix', $args->node_route_like_prefix, 'like_prefix');
${'node_route_like_prefix27_argument'}->createConditionValue();
if(!${'node_route_like_prefix27_argument'}->isValid()) return ${'node_route_like_prefix27_argument'}->getErrorMessage();
} else
${'node_route_like_prefix27_argument'} = NULL;if(${'node_route_like_prefix27_argument'} !== null) ${'node_route_like_prefix27_argument'}->setColumnType('varchar');

${'sort_index28_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index28_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index28_argument'}->isValid()) return ${'sort_index28_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_categories`', '`nproduct_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl25_argument,"equal")
,new ConditionWithArgument('`node_route`',$node_route26_argument,"equal", 'and')
,new ConditionWithArgument('`node_route`',$node_route_like_prefix27_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index28_argument'}, "asc")
));
$query->setLimit();
return $query; ?>