<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAutologin");
$query->setAction("insert");
$query->setPriority("");

${'autologin_key1_argument'} = new Argument('autologin_key', $args->{'autologin_key'});
${'autologin_key1_argument'}->checkNotNull();
if(!${'autologin_key1_argument'}->isValid()) return ${'autologin_key1_argument'}->getErrorMessage();
if(${'autologin_key1_argument'} !== null) ${'autologin_key1_argument'}->setColumnType('varchar');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`autologin_key`', ${'autologin_key1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
));
$query->setTables(array(
new Table('`hme_member_autologin`', '`member_autologin`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>