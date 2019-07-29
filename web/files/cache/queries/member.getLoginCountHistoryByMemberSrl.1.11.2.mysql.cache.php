<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountHistoryByMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl106_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl106_argument'}->createConditionValue();
if(!${'member_srl106_argument'}->isValid()) return ${'member_srl106_argument'}->getErrorMessage();
} else
${'member_srl106_argument'} = NULL;if(${'member_srl106_argument'} !== null) ${'member_srl106_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl106_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>