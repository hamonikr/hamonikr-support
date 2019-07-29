<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleUpdateLog");
$query->setAction("select");
$query->setPriority("");
if(isset($args->update_id)) {
${'update_id52_argument'} = new ConditionArgument('update_id', $args->update_id, 'in');
${'update_id52_argument'}->createConditionValue();
if(!${'update_id52_argument'}->isValid()) return ${'update_id52_argument'}->getErrorMessage();
} else
${'update_id52_argument'} = NULL;if(${'update_id52_argument'} !== null) ${'update_id52_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_update`', '`module_update`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`update_id`',$update_id52_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>