<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getJoinForm");
$query->setAction("select");
$query->setPriority("");

${'member_join_form_srl1_argument'} = new ConditionArgument('member_join_form_srl', $args->member_join_form_srl, 'equal');
${'member_join_form_srl1_argument'}->checkNotNull();
${'member_join_form_srl1_argument'}->createConditionValue();
if(!${'member_join_form_srl1_argument'}->isValid()) return ${'member_join_form_srl1_argument'}->getErrorMessage();
if(${'member_join_form_srl1_argument'} !== null) ${'member_join_form_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_join_form`', '`member_join_form`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_join_form_srl`',$member_join_form_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>