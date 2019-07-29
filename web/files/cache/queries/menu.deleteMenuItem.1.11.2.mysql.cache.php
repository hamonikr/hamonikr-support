<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMenuItem");
$query->setAction("delete");
$query->setPriority("");

${'menu_item_srl7_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl7_argument'}->checkFilter('number');
${'menu_item_srl7_argument'}->checkNotNull();
${'menu_item_srl7_argument'}->createConditionValue();
if(!${'menu_item_srl7_argument'}->isValid()) return ${'menu_item_srl7_argument'}->getErrorMessage();
if(${'menu_item_srl7_argument'} !== null) ${'menu_item_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>