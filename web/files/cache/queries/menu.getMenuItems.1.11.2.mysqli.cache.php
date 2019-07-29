<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl3_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl3_argument'}->checkFilter('number');
${'menu_srl3_argument'}->checkNotNull();
${'menu_srl3_argument'}->createConditionValue();
if(!${'menu_srl3_argument'}->isValid()) return ${'menu_srl3_argument'}->getErrorMessage();
if(${'menu_srl3_argument'} !== null) ${'menu_srl3_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl4_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl4_argument'}->checkFilter('number');
${'parent_srl4_argument'}->createConditionValue();
if(!${'parent_srl4_argument'}->isValid()) return ${'parent_srl4_argument'}->getErrorMessage();
} else
${'parent_srl4_argument'} = NULL;if(${'parent_srl4_argument'} !== null) ${'parent_srl4_argument'}->setColumnType('number');

${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index5_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl3_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index5_argument'}, "desc")
));
$query->setLimit();
return $query; ?>