<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAutologin");
$query->setAction("delete");
$query->setPriority("");

${'autologin_key1_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key1_argument'}->ensureDefaultValue('');
${'autologin_key1_argument'}->createConditionValue();
if(!${'autologin_key1_argument'}->isValid()) return ${'autologin_key1_argument'}->getErrorMessage();
if(${'autologin_key1_argument'} !== null) ${'autologin_key1_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`autologin_key`',$autologin_key1_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'or')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>