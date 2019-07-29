<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItemListorder");
$query->setAction("update");
$query->setPriority("");

${'listorder1_argument'} = new Argument('listorder', NULL);
${'listorder1_argument'}->setColumnOperation('-');
${'listorder1_argument'}->ensureDefaultValue(1);
if(!${'listorder1_argument'}->isValid()) return ${'listorder1_argument'}->getErrorMessage();
if(${'listorder1_argument'} !== null) ${'listorder1_argument'}->setColumnType('number');

${'menu_srl2_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl2_argument'}->checkFilter('number');
${'menu_srl2_argument'}->checkNotNull();
${'menu_srl2_argument'}->createConditionValue();
if(!${'menu_srl2_argument'}->isValid()) return ${'menu_srl2_argument'}->getErrorMessage();
if(${'menu_srl2_argument'} !== null) ${'menu_srl2_argument'}->setColumnType('number');

${'parent_srl3_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl3_argument'}->checkFilter('number');
${'parent_srl3_argument'}->checkNotNull();
${'parent_srl3_argument'}->createConditionValue();
if(!${'parent_srl3_argument'}->isValid()) return ${'parent_srl3_argument'}->getErrorMessage();
if(${'parent_srl3_argument'} !== null) ${'parent_srl3_argument'}->setColumnType('number');

${'listorder4_argument'} = new ConditionArgument('listorder', $args->listorder, 'less');
${'listorder4_argument'}->checkFilter('number');
${'listorder4_argument'}->checkNotNull();
${'listorder4_argument'}->createConditionValue();
if(!${'listorder4_argument'}->isValid()) return ${'listorder4_argument'}->getErrorMessage();
if(${'listorder4_argument'} !== null) ${'listorder4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`listorder`', ${'listorder1_argument'})
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl2_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`listorder`',$listorder4_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>