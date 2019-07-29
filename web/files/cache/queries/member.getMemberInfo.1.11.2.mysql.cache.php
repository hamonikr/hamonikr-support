<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfo");
$query->setAction("select");
$query->setPriority("");

${'user_id2_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id2_argument'}->checkNotNull();
${'user_id2_argument'}->createConditionValue();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>