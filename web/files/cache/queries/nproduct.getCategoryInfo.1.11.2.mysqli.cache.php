<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryInfo");
$query->setAction("select");
$query->setPriority("");

${'node_id24_argument'} = new ConditionArgument('node_id', $args->node_id, 'equal');
${'node_id24_argument'}->checkNotNull();
${'node_id24_argument'}->createConditionValue();
if(!${'node_id24_argument'}->isValid()) return ${'node_id24_argument'}->getErrorMessage();
if(${'node_id24_argument'} !== null) ${'node_id24_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module`.`mid`', '`mid`')
,new SelectExpression('`cate`.`node_id`')
,new SelectExpression('`cate`.`node_route`')
,new SelectExpression('`cate`.`node_route_text`')
,new SelectExpression('`cate`.`module_srl`')
,new SelectExpression('`cate`.`category_name`')
,new SelectExpression('`cate`.`list_order`')
,new SelectExpression('`cate`.`regdate`')
));
$query->setTables(array(
new Table('`hme_nproduct_categories`', '`cate`')
,new JoinTable('`hme_modules`', '`module`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`.`module_srl`','`cate`.`module_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cate`.`node_id`',$node_id24_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>