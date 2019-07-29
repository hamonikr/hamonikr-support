<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl187_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl187_argument'}->checkFilter('number');
${'menu_srl187_argument'}->checkNotNull();
${'menu_srl187_argument'}->createConditionValue();
if(!${'menu_srl187_argument'}->isValid()) return ${'menu_srl187_argument'}->getErrorMessage();
if(${'menu_srl187_argument'} !== null) ${'menu_srl187_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl188_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl188_argument'}->checkFilter('number');
${'parent_srl188_argument'}->createConditionValue();
if(!${'parent_srl188_argument'}->isValid()) return ${'parent_srl188_argument'}->getErrorMessage();
} else
${'parent_srl188_argument'} = NULL;if(${'parent_srl188_argument'} !== null) ${'parent_srl188_argument'}->setColumnType('number');

${'sort_index189_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index189_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index189_argument'}->isValid()) return ${'sort_index189_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl187_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl188_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index189_argument'}, "desc")
));
$query->setLimit();
return $query; ?>