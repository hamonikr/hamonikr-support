<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl246_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl246_argument'}->createConditionValue();
if(!${'module_srl246_argument'}->isValid()) return ${'module_srl246_argument'}->getErrorMessage();
} else
${'module_srl246_argument'} = NULL;if(${'module_srl246_argument'} !== null) ${'module_srl246_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl247_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl247_argument'}->createConditionValue();
if(!${'member_srl247_argument'}->isValid()) return ${'member_srl247_argument'}->getErrorMessage();
} else
${'member_srl247_argument'} = NULL;if(${'member_srl247_argument'} !== null) ${'member_srl247_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress248_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress248_argument'}->createConditionValue();
if(!${'ipaddress248_argument'}->isValid()) return ${'ipaddress248_argument'}->getErrorMessage();
} else
${'ipaddress248_argument'} = NULL;if(${'ipaddress248_argument'} !== null) ${'ipaddress248_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key249_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key249_argument'}->createConditionValue();
if(!${'certify_key249_argument'}->isValid()) return ${'certify_key249_argument'}->getErrorMessage();
} else
${'certify_key249_argument'} = NULL;if(${'certify_key249_argument'} !== null) ${'certify_key249_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl246_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl247_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress248_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key249_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>