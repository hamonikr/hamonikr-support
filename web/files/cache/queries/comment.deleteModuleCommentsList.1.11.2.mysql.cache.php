<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleCommentsList");
$query->setAction("delete");
$query->setPriority("");

${'module_srl14_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl14_argument'}->checkFilter('number');
${'module_srl14_argument'}->checkNotNull();
${'module_srl14_argument'}->createConditionValue();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>