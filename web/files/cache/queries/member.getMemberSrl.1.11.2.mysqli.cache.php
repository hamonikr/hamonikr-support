<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id2_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id2_argument'}->createConditionValue();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
} else
${'user_id2_argument'} = NULL;if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address3_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address3_argument'}->createConditionValue();
if(!${'email_address3_argument'}->isValid()) return ${'email_address3_argument'}->getErrorMessage();
} else
${'email_address3_argument'} = NULL;if(${'email_address3_argument'} !== null) ${'email_address3_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name4_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name4_argument'}->createConditionValue();
if(!${'nick_name4_argument'}->isValid()) return ${'nick_name4_argument'}->getErrorMessage();
} else
${'nick_name4_argument'} = NULL;if(${'nick_name4_argument'} !== null) ${'nick_name4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id2_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address3_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>