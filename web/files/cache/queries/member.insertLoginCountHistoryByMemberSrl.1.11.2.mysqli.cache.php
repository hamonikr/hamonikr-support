<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountHistoryByMemberSrl");
$query->setAction("insert");
$query->setPriority("");

${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl1_argument'}->checkNotNull();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'content2_argument'} = new Argument('content', $args->{'content'});
${'content2_argument'}->checkNotNull();
if(!${'content2_argument'}->isValid()) return ${'content2_argument'}->getErrorMessage();
if(${'content2_argument'} !== null) ${'content2_argument'}->setColumnType('bigtext');

${'last_update3_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update3_argument'}->isValid()) return ${'last_update3_argument'}->getErrorMessage();
if(${'last_update3_argument'} !== null) ${'last_update3_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl1_argument'})
,new InsertExpression('`content`', ${'content2_argument'})
,new InsertExpression('`last_update`', ${'last_update3_argument'})
));
$query->setTables(array(
new Table('`hme_member_count_history`', '`member_count_history`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>