<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAdminId");
$query->setAction("delete");
$query->setPriority("");

${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->checkNotNull();
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl12_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl12_argument'}->checkFilter('number');
${'member_srl12_argument'}->createConditionValue();
if(!${'member_srl12_argument'}->isValid()) return ${'member_srl12_argument'}->getErrorMessage();
} else
${'member_srl12_argument'} = NULL;if(${'member_srl12_argument'} !== null) ${'member_srl12_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_admins`', '`module_admins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>