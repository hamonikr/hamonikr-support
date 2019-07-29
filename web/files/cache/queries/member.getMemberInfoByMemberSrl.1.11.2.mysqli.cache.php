<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByMemberSrl");
$query->setAction("select");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>