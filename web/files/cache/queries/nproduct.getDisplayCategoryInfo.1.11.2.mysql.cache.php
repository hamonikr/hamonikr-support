<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDisplayCategoryInfo");
$query->setAction("select");
$query->setPriority("");

${'category_srl1_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl1_argument'}->checkNotNull();
${'category_srl1_argument'}->createConditionValue();
if(!${'category_srl1_argument'}->isValid()) return ${'category_srl1_argument'}->getErrorMessage();
if(${'category_srl1_argument'} !== null) ${'category_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module`.`mid`', '`mid`')
,new SelectExpression('`cate`.`category_srl`', '`category_srl`')
,new SelectExpression('`cate`.`module_srl`', '`module_srl`')
,new SelectExpression('`cate`.`category_name`', '`category_name`')
,new SelectExpression('`cate`.`list_order`', '`list_order`')
,new SelectExpression('`cate`.`thumbnail_width`', '`thumbnail_width`')
,new SelectExpression('`cate`.`thumbnail_height`', '`thumbnail_height`')
,new SelectExpression('`cate`.`num_columns`', '`num_columns`')
,new SelectExpression('`cate`.`num_rows`', '`num_rows`')
,new SelectExpression('`cate`.`regdate`', '`regdate`')
));
$query->setTables(array(
new Table('`hme_nproduct_display_categories`', '`cate`')
,new JoinTable('`hme_modules`', '`module`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`.`module_srl`','`cate`.`module_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cate`.`category_srl`',$category_srl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>