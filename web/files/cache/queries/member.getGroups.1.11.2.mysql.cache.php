<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl32_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl32_argument'}->createConditionValue();
if(!${'site_srl32_argument'}->isValid()) return ${'site_srl32_argument'}->getErrorMessage();
} else
${'site_srl32_argument'} = NULL;if(${'site_srl32_argument'} !== null) ${'site_srl32_argument'}->setColumnType('number');

${'sort_index33_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index33_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index33_argument'}->isValid()) return ${'sort_index33_argument'}->getErrorMessage();

${'order_type34_argument'} = new SortArgument('order_type34', $args->order_type);
${'order_type34_argument'}->ensureDefaultValue('asc');
if(!${'order_type34_argument'}->isValid()) return ${'order_type34_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl32_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index33_argument'}, $order_type34_argument)
));
$query->setLimit();
return $query; ?>