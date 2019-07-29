<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemsByNodeRoute");
$query->setAction("select");
$query->setPriority("");
if(isset($args->node_route)) {
${'node_route10_argument'} = new ConditionArgument('node_route', $args->node_route, 'like_prefix');
${'node_route10_argument'}->createConditionValue();
if(!${'node_route10_argument'}->isValid()) return ${'node_route10_argument'}->getErrorMessage();
} else
${'node_route10_argument'} = NULL;if(${'node_route10_argument'} !== null) ${'node_route10_argument'}->setColumnType('varchar');
if(isset($args->display)) {
${'display11_argument'} = new ConditionArgument('display', $args->display, 'equal');
${'display11_argument'}->createConditionValue();
if(!${'display11_argument'}->isValid()) return ${'display11_argument'}->getErrorMessage();
} else
${'display11_argument'} = NULL;if(${'display11_argument'} !== null) ${'display11_argument'}->setColumnType('char');
if(isset($args->module_srl)) {
${'module_srl12_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl12_argument'}->createConditionValue();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
} else
${'module_srl12_argument'} = NULL;if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');
if(isset($args->proc_module)) {
${'proc_module13_argument'} = new ConditionArgument('proc_module', $args->proc_module, 'equal');
${'proc_module13_argument'}->createConditionValue();
if(!${'proc_module13_argument'}->isValid()) return ${'proc_module13_argument'}->getErrorMessage();
} else
${'proc_module13_argument'} = NULL;if(${'proc_module13_argument'} !== null) ${'proc_module13_argument'}->setColumnType('varchar');
if(isset($args->item_name)) {
${'item_name14_argument'} = new ConditionArgument('item_name', $args->item_name, 'like');
${'item_name14_argument'}->createConditionValue();
if(!${'item_name14_argument'}->isValid()) return ${'item_name14_argument'}->getErrorMessage();
} else
${'item_name14_argument'} = NULL;if(${'item_name14_argument'} !== null) ${'item_name14_argument'}->setColumnType('varchar');

${'page17_argument'} = new Argument('page', $args->{'page'});
${'page17_argument'}->ensureDefaultValue('1');
if(!${'page17_argument'}->isValid()) return ${'page17_argument'}->getErrorMessage();

${'page_count18_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count18_argument'}->ensureDefaultValue('10');
if(!${'page_count18_argument'}->isValid()) return ${'page_count18_argument'}->getErrorMessage();

${'list_count19_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count19_argument'}->ensureDefaultValue('30');
if(!${'list_count19_argument'}->isValid()) return ${'list_count19_argument'}->getErrorMessage();

${'sort_index15_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index15_argument'}->ensureDefaultValue('item_srl');
if(!${'sort_index15_argument'}->isValid()) return ${'sort_index15_argument'}->getErrorMessage();

${'order_type16_argument'} = new SortArgument('order_type16', $args->order_type);
${'order_type16_argument'}->ensureDefaultValue('asc');
if(!${'order_type16_argument'}->isValid()) return ${'order_type16_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_items`', '`nproduct_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`node_route`',$node_route10_argument,"like_prefix")
,new ConditionWithArgument('`display`',$display11_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl12_argument,"equal", 'and')
,new ConditionWithArgument('`proc_module`',$proc_module13_argument,"equal", 'and')
,new ConditionWithArgument('`item_name`',$item_name14_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index15_argument'}, $order_type16_argument)
));
$query->setLimit(new Limit(${'list_count19_argument'}, ${'page17_argument'}, ${'page_count18_argument'}));
return $query; ?>