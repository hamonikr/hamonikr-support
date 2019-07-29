<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
} else
${'module_srl8_argument'} = NULL;if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->category_id)) {
${'category_id9_argument'} = new ConditionArgument('category_id', $args->category_id, 'equal');
${'category_id9_argument'}->createConditionValue();
if(!${'category_id9_argument'}->isValid()) return ${'category_id9_argument'}->getErrorMessage();
} else
${'category_id9_argument'} = NULL;if(${'category_id9_argument'} !== null) ${'category_id9_argument'}->setColumnType('number');
if(isset($args->item_srl)) {
${'item_srl10_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'in');
${'item_srl10_argument'}->createConditionValue();
if(!${'item_srl10_argument'}->isValid()) return ${'item_srl10_argument'}->getErrorMessage();
} else
${'item_srl10_argument'} = NULL;if(${'item_srl10_argument'} !== null) ${'item_srl10_argument'}->setColumnType('number');
if(isset($args->display)) {
${'display11_argument'} = new ConditionArgument('display', $args->display, 'equal');
${'display11_argument'}->createConditionValue();
if(!${'display11_argument'}->isValid()) return ${'display11_argument'}->getErrorMessage();
} else
${'display11_argument'} = NULL;if(${'display11_argument'} !== null) ${'display11_argument'}->setColumnType('char');
if(isset($args->updatetime)) {
${'updatetime12_argument'} = new ConditionArgument('updatetime', $args->updatetime, 'more');
${'updatetime12_argument'}->createConditionValue();
if(!${'updatetime12_argument'}->isValid()) return ${'updatetime12_argument'}->getErrorMessage();
} else
${'updatetime12_argument'} = NULL;if(${'updatetime12_argument'} !== null) ${'updatetime12_argument'}->setColumnType('date');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('item_srl');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_items`', '`nproduct_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal")
,new ConditionWithArgument('`category_id`',$category_id9_argument,"equal", 'and')
,new ConditionWithArgument('`item_srl`',$item_srl10_argument,"in", 'and')
,new ConditionWithArgument('`display`',$display11_argument,"equal", 'and')
,new ConditionWithArgument('`updatetime`',$updatetime12_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>