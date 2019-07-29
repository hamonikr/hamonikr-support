<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountHistoryByMemberSrl");
$query->setAction("update");
$query->setPriority("");

${'content1_argument'} = new Argument('content', $args->{'content'});
${'content1_argument'}->checkNotNull();
if(!${'content1_argument'}->isValid()) return ${'content1_argument'}->getErrorMessage();
if(${'content1_argument'} !== null) ${'content1_argument'}->setColumnType('bigtext');

${'last_update2_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update2_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update2_argument'}->checkNotNull();
if(!${'last_update2_argument'}->isValid()) return ${'last_update2_argument'}->getErrorMessage();
if(${'last_update2_argument'} !== null) ${'last_update2_argument'}->setColumnType('date');

${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->checkNotNull();
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`content`', ${'content1_argument'})
,new UpdateExpression('`last_update`', ${'last_update2_argument'})
));
$query->setTables(array(
new Table('`hme_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>