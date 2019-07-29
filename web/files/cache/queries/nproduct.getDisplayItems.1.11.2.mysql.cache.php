<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDisplayItems");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl2_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl2_argument'}->createConditionValue();
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
} else
${'category_srl2_argument'} = NULL;if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');
if(isset($args->node_route)) {
${'node_route3_argument'} = new ConditionArgument('node_route', $args->node_route, 'like_prefix');
${'node_route3_argument'}->createConditionValue();
if(!${'node_route3_argument'}->isValid()) return ${'node_route3_argument'}->getErrorMessage();
} else
${'node_route3_argument'} = NULL;if(${'node_route3_argument'} !== null) ${'node_route3_argument'}->setColumnType('varchar');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('10');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('20');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index5_argument'}->ensureDefaultValue('display.list_order');
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('display.node_route');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module`.`mid`', '`mid`')
,new SelectExpression('`display`.`module_srl`', '`module_srl`')
,new SelectExpression('`display`.`regdate`', '`regdate`')
,new SelectExpression('`display`.`item_srl`', '`item_srl`')
,new SelectExpression('`item`.`display`', '`display`')
,new SelectExpression('`item`.`item_code`', '`item_code`')
,new SelectExpression('`item`.`item_name`', '`item_name`')
,new SelectExpression('`item`.`category_id`', '`category_id`')
,new SelectExpression('`item`.`file_srl`', '`file_srl`')
,new SelectExpression('`item`.`price`', '`price`')
,new SelectExpression('`item`.`discount_amount`', '`discount_amount`')
,new SelectExpression('`item`.`discount_info`', '`discount_info`')
,new SelectExpression('`item`.`document_srl`', '`document_srl`')
,new SelectExpression('`item`.`thumb_file_srl`', '`thumb_file_srl`')
,new SelectExpression('`item`.`review_count`', '`review_count`')
,new SelectExpression('`item`.`sales_count`', '`sales_count`')
,new SelectExpression('`item`.`related_items`', '`related_items`')
,new SelectExpression('`item`.`extra_vars`', '`extra_vars`')
,new SelectExpression('`item`.`updatetime`', '`updatetime`')
,new SelectExpression('`item`.`regdate`', '`regdate`')
,new SelectExpression('1', '`quantity`')
));
$query->setTables(array(
new Table('`hme_nproduct_display_items`', '`display`')
,new JoinTable('`hme_nproduct_items`', '`item`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`display`.`item_srl`','`item`.`item_srl`',"equal")
,new ConditionWithoutArgument('`item`.`display`',"'Y'","equal", 'and')))
))
,new JoinTable('`hme_modules`', '`module`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`.`module_srl`','`item`.`module_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`display`.`module_srl`',$module_srl1_argument,"in")
,new ConditionWithArgument('`display`.`category_srl`',$category_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`display`.`node_route`',$node_route3_argument,"like_prefix", 'and')
,new ConditionWithoutArgument('`item`.`display`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "asc")
,new OrderByColumn(${'sort_index5_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>