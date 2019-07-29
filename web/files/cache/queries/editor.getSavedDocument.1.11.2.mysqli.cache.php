<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl33_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl33_argument'}->createConditionValue();
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
} else
${'module_srl33_argument'} = NULL;if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl34_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl34_argument'}->createConditionValue();
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
} else
${'member_srl34_argument'} = NULL;if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress35_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress35_argument'}->createConditionValue();
if(!${'ipaddress35_argument'}->isValid()) return ${'ipaddress35_argument'}->getErrorMessage();
} else
${'ipaddress35_argument'} = NULL;if(${'ipaddress35_argument'} !== null) ${'ipaddress35_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key36_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key36_argument'}->createConditionValue();
if(!${'certify_key36_argument'}->isValid()) return ${'certify_key36_argument'}->getErrorMessage();
} else
${'certify_key36_argument'} = NULL;if(${'certify_key36_argument'} !== null) ${'certify_key36_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl33_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl34_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress35_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key36_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>