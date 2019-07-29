<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemsByNodeRoute");
$query->setAction("select");
$query->setPriority("");
if(isset($args->node_route)) {
${'node_route1_argument'} = new ConditionArgument('node_route', $args->node_route, 'like_prefix');
${'node_route1_argument'}->createConditionValue();
if(!${'node_route1_argument'}->isValid()) return ${'node_route1_argument'}->getErrorMessage();
} else
${'node_route1_argument'} = NULL;if(${'node_route1_argument'} !== null) ${'node_route1_argument'}->setColumnType('varchar');
if(isset($args->display)) {
${'display2_argument'} = new ConditionArgument('display', $args->display, 'equal');
${'display2_argument'}->createConditionValue();
if(!${'display2_argument'}->isValid()) return ${'display2_argument'}->getErrorMessage();
} else
${'display2_argument'} = NULL;if(${'display2_argument'} !== null) ${'display2_argument'}->setColumnType('char');
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');
if(isset($args->proc_module)) {
${'proc_module4_argument'} = new ConditionArgument('proc_module', $args->proc_module, 'equal');
${'proc_module4_argument'}->createConditionValue();
if(!${'proc_module4_argument'}->isValid()) return ${'proc_module4_argument'}->getErrorMessage();
} else
${'proc_module4_argument'} = NULL;if(${'proc_module4_argument'} !== null) ${'proc_module4_argument'}->setColumnType('varchar');
if(isset($args->item_name)) {
${'item_name5_argument'} = new ConditionArgument('item_name', $args->item_name, 'like');
${'item_name5_argument'}->createConditionValue();
if(!${'item_name5_argument'}->isValid()) return ${'item_name5_argument'}->getErrorMessage();
} else
${'item_name5_argument'} = NULL;if(${'item_name5_argument'} !== null) ${'item_name5_argument'}->setColumnType('varchar');

${'page8_argument'} = new Argument('page', $args->{'page'});
${'page8_argument'}->ensureDefaultValue('1');
if(!${'page8_argument'}->isValid()) return ${'page8_argument'}->getErrorMessage();

${'page_count9_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count9_argument'}->ensureDefaultValue('10');
if(!${'page_count9_argument'}->isValid()) return ${'page_count9_argument'}->getErrorMessage();

${'list_count10_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count10_argument'}->ensureDefaultValue('30');
if(!${'list_count10_argument'}->isValid()) return ${'list_count10_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('item_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

${'order_type7_argument'} = new SortArgument('order_type7', $args->order_type);
${'order_type7_argument'}->ensureDefaultValue('asc');
if(!${'order_type7_argument'}->isValid()) return ${'order_type7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_items`', '`nproduct_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`node_route`',$node_route1_argument,"like_prefix")
,new ConditionWithArgument('`display`',$display2_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`proc_module`',$proc_module4_argument,"equal", 'and')
,new ConditionWithArgument('`item_name`',$item_name5_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, $order_type7_argument)
));
$query->setLimit(new Limit(${'list_count10_argument'}, ${'page8_argument'}, ${'page_count9_argument'}));
return $query; ?>