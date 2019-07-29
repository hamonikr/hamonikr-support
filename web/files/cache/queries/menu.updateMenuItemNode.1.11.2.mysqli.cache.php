<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItemNode");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl5_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl5_argument'}->isValid()) return ${'menu_srl5_argument'}->getErrorMessage();
} else
${'menu_srl5_argument'} = NULL;if(${'menu_srl5_argument'} !== null) ${'menu_srl5_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl6_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl6_argument'}->isValid()) return ${'parent_srl6_argument'}->getErrorMessage();
} else
${'parent_srl6_argument'} = NULL;if(${'parent_srl6_argument'} !== null) ${'parent_srl6_argument'}->setColumnType('number');
if(isset($args->listorder)) {
${'listorder7_argument'} = new Argument('listorder', $args->{'listorder'});
if(!${'listorder7_argument'}->isValid()) return ${'listorder7_argument'}->getErrorMessage();
} else
${'listorder7_argument'} = NULL;if(${'listorder7_argument'} !== null) ${'listorder7_argument'}->setColumnType('number');

${'menu_item_srl8_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl8_argument'}->checkFilter('number');
${'menu_item_srl8_argument'}->checkNotNull();
${'menu_item_srl8_argument'}->createConditionValue();
if(!${'menu_item_srl8_argument'}->isValid()) return ${'menu_item_srl8_argument'}->getErrorMessage();
if(${'menu_item_srl8_argument'} !== null) ${'menu_item_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl5_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl6_argument'})
,new UpdateExpression('`listorder`', ${'listorder7_argument'})
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>