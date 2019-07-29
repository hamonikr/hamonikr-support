<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAutologin");
$query->setAction("select");
$query->setPriority("");

${'autologin_key1_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key1_argument'}->checkNotNull();
${'autologin_key1_argument'}->createConditionValue();
if(!${'autologin_key1_argument'}->isValid()) return ${'autologin_key1_argument'}->getErrorMessage();
if(${'autologin_key1_argument'} !== null) ${'autologin_key1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member`.`email_address`', '`email_address`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`password`', '`password`')
,new SelectExpression('`member_autologin`.`autologin_key`', '`autologin_key`')
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
,new Table('`hme_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_autologin`.`autologin_key`',$autologin_key1_argument,"equal")
,new ConditionWithoutArgument('`member`.`member_srl`','`member_autologin`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>