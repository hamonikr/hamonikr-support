<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdminID");
$query->setAction("select");
$query->setPriority("");

${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->checkNotNull();
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_admins`', '`module_admins`')
,new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl3_argument,"equal")
,new ConditionWithoutArgument('`member`.`member_srl`','`module_admins`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>