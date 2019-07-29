<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleUpdateLog");
$query->setAction("insert");
$query->setPriority("");

${'update_id17_argument'} = new Argument('update_id', $args->{'update_id'});
${'update_id17_argument'}->checkNotNull();
if(!${'update_id17_argument'}->isValid()) return ${'update_id17_argument'}->getErrorMessage();
if(${'update_id17_argument'} !== null) ${'update_id17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`update_id`', ${'update_id17_argument'})
));
$query->setTables(array(
new Table('`hme_module_update`', '`module_update`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>