<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMaxListorder");
$query->setAction("select");
$query->setPriority("");

${'menu_srl1_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl1_argument'}->checkFilter('number');
${'menu_srl1_argument'}->checkNotNull();
${'menu_srl1_argument'}->createConditionValue();
if(!${'menu_srl1_argument'}->isValid()) return ${'menu_srl1_argument'}->getErrorMessage();
if(${'menu_srl1_argument'} !== null) ${'menu_srl1_argument'}->setColumnType('number');

${'parent_srl2_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl2_argument'}->checkFilter('number');
${'parent_srl2_argument'}->checkNotNull();
${'parent_srl2_argument'}->createConditionValue();
if(!${'parent_srl2_argument'}->isValid()) return ${'parent_srl2_argument'}->getErrorMessage();
if(${'parent_srl2_argument'} !== null) ${'parent_srl2_argument'}->setColumnType('number');
if(isset($args->menu_item_srl)) {
${'menu_item_srl3_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'more');
${'menu_item_srl3_argument'}->checkFilter('number');
${'menu_item_srl3_argument'}->createConditionValue();
if(!${'menu_item_srl3_argument'}->isValid()) return ${'menu_item_srl3_argument'}->getErrorMessage();
} else
${'menu_item_srl3_argument'} = NULL;if(${'menu_item_srl3_argument'} !== null) ${'menu_item_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('max(`listorder`)', '`listorder`')
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl1_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`menu_item_srl`',$menu_item_srl3_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>