<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAuthMail");
$query->setAction("insert");
$query->setPriority("");

${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'user_id2_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id2_argument'}->checkNotNull();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');

${'auth_key3_argument'} = new Argument('auth_key', $args->{'auth_key'});
${'auth_key3_argument'}->checkNotNull();
if(!${'auth_key3_argument'}->isValid()) return ${'auth_key3_argument'}->getErrorMessage();
if(${'auth_key3_argument'} !== null) ${'auth_key3_argument'}->setColumnType('varchar');

${'new_password4_argument'} = new Argument('new_password', $args->{'new_password'});
${'new_password4_argument'}->checkNotNull();
if(!${'new_password4_argument'}->isValid()) return ${'new_password4_argument'}->getErrorMessage();
if(${'new_password4_argument'} !== null) ${'new_password4_argument'}->setColumnType('varchar');

${'is_register5_argument'} = new Argument('is_register', $args->{'is_register'});
${'is_register5_argument'}->ensureDefaultValue('N');
if(!${'is_register5_argument'}->isValid()) return ${'is_register5_argument'}->getErrorMessage();
if(${'is_register5_argument'} !== null) ${'is_register5_argument'}->setColumnType('char');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl1_argument'})
,new InsertExpression('`user_id`', ${'user_id2_argument'})
,new InsertExpression('`auth_key`', ${'auth_key3_argument'})
,new InsertExpression('`new_password`', ${'new_password4_argument'})
,new InsertExpression('`is_register`', ${'is_register5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`hme_member_auth_mail`', '`member_auth_mail`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>