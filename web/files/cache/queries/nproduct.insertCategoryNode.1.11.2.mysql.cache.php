<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategoryNode");
$query->setAction("insert");
$query->setPriority("");

${'node_id1_argument'} = new Argument('node_id', $args->{'node_id'});
${'node_id1_argument'}->checkFilter('number');
${'node_id1_argument'}->checkNotNull();
if(!${'node_id1_argument'}->isValid()) return ${'node_id1_argument'}->getErrorMessage();
if(${'node_id1_argument'} !== null) ${'node_id1_argument'}->setColumnType('number');

${'node_route2_argument'} = new Argument('node_route', $args->{'node_route'});
${'node_route2_argument'}->checkNotNull();
if(!${'node_route2_argument'}->isValid()) return ${'node_route2_argument'}->getErrorMessage();
if(${'node_route2_argument'} !== null) ${'node_route2_argument'}->setColumnType('varchar');

${'node_route_text3_argument'} = new Argument('node_route_text', $args->{'node_route_text'});
${'node_route_text3_argument'}->checkNotNull();
if(!${'node_route_text3_argument'}->isValid()) return ${'node_route_text3_argument'}->getErrorMessage();
if(${'node_route_text3_argument'} !== null) ${'node_route_text3_argument'}->setColumnType('varchar');

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'category_name5_argument'} = new Argument('category_name', $args->{'category_name'});
${'category_name5_argument'}->checkNotNull();
if(!${'category_name5_argument'}->isValid()) return ${'category_name5_argument'}->getErrorMessage();
if(${'category_name5_argument'} !== null) ${'category_name5_argument'}->setColumnType('varchar');

${'list_order6_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order6_argument'}->checkNotNull();
if(!${'list_order6_argument'}->isValid()) return ${'list_order6_argument'}->getErrorMessage();
if(${'list_order6_argument'} !== null) ${'list_order6_argument'}->setColumnType('number');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`node_id`', ${'node_id1_argument'})
,new InsertExpression('`node_route`', ${'node_route2_argument'})
,new InsertExpression('`node_route_text`', ${'node_route_text3_argument'})
,new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`category_name`', ${'category_name5_argument'})
,new InsertExpression('`list_order`', ${'list_order6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`hme_nproduct_categories`', '`nproduct_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>