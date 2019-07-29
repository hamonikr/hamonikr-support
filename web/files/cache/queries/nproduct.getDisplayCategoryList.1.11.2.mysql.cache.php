<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDisplayCategoryList");
$query->setAction("select");
$query->setPriority("");

${'module_srl20_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl20_argument'}->checkNotNull();
${'module_srl20_argument'}->createConditionValue();
if(!${'module_srl20_argument'}->isValid()) return ${'module_srl20_argument'}->getErrorMessage();
if(${'module_srl20_argument'} !== null) ${'module_srl20_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl21_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl21_argument'}->createConditionValue();
if(!${'category_srl21_argument'}->isValid()) return ${'category_srl21_argument'}->getErrorMessage();
} else
${'category_srl21_argument'} = NULL;if(${'category_srl21_argument'} !== null) ${'category_srl21_argument'}->setColumnType('number');

${'sort_index22_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index22_argument'}->ensureDefaultValue('cate.list_order');
if(!${'sort_index22_argument'}->isValid()) return ${'sort_index22_argument'}->getErrorMessage();

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
new ConditionWithArgument('`cate`.`module_srl`',$module_srl20_argument,"in")
,new ConditionWithArgument('`cate`.`category_srl`',$category_srl21_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index22_argument'}, "asc")
));
$query->setLimit();
return $query; ?>