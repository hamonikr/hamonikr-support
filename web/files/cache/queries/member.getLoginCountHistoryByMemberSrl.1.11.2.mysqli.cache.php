<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountHistoryByMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = NULL;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>