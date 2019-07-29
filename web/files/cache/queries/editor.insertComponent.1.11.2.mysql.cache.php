<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name120_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name120_argument'}->checkNotNull();
if(!${'component_name120_argument'}->isValid()) return ${'component_name120_argument'}->getErrorMessage();
if(${'component_name120_argument'} !== null) ${'component_name120_argument'}->setColumnType('varchar');

${'enabled121_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled121_argument'}->ensureDefaultValue('N');
if(!${'enabled121_argument'}->isValid()) return ${'enabled121_argument'}->getErrorMessage();
if(${'enabled121_argument'} !== null) ${'enabled121_argument'}->setColumnType('char');

${'list_order122_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order122_argument'}->ensureDefaultValue($sequence);
if(!${'list_order122_argument'}->isValid()) return ${'list_order122_argument'}->getErrorMessage();
if(${'list_order122_argument'} !== null) ${'list_order122_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name120_argument'})
,new InsertExpression('`enabled`', ${'enabled121_argument'})
,new InsertExpression('`list_order`', ${'list_order122_argument'})
));
$query->setTables(array(
new Table('`hme_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>