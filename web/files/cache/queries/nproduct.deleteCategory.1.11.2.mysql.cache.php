<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCategory");
$query->setAction("delete");
$query->setPriority("");

${'node_id1_argument'} = new ConditionArgument('node_id', $args->node_id, 'equal');
${'node_id1_argument'}->checkFilter('number');
${'node_id1_argument'}->checkNotNull();
${'node_id1_argument'}->createConditionValue();
if(!${'node_id1_argument'}->isValid()) return ${'node_id1_argument'}->getErrorMessage();
if(${'node_id1_argument'} !== null) ${'node_id1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_nproduct_categories`', '`nproduct_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`node_id`',$node_id1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>