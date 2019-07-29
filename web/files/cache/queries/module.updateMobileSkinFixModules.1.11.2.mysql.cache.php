<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMobileSkinFixModules");
$query->setAction("update");
$query->setPriority("");

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`is_mskin_fix`', "'Y'")
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`mskin`','``',"notnull")
,new ConditionWithoutArgument('`mskin`',"' '","notequal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>