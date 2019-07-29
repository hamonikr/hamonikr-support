<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSubCategoryCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->node_route)) {
${'node_route23_argument'} = new ConditionArgument('node_route', $args->node_route, 'like_prefix');
${'node_route23_argument'}->createConditionValue();
if(!${'node_route23_argument'}->isValid()) return ${'node_route23_argument'}->getErrorMessage();
} else
${'node_route23_argument'} = NULL;if(${'node_route23_argument'} !== null) ${'node_route23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('COUNT(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_nproduct_categories`', '`nproduct_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`node_route`',$node_route23_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>