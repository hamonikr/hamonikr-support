<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteLoginCountHistoryByMemberSrl");
$query->setAction("delete");
$query->setPriority("");

${'member_srl17_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl17_argument'}->checkNotNull();
${'member_srl17_argument'}->createConditionValue();
if(!${'member_srl17_argument'}->isValid()) return ${'member_srl17_argument'}->getErrorMessage();
if(${'member_srl17_argument'} !== null) ${'member_srl17_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>