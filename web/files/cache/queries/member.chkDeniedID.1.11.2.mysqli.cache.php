<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("chkDeniedID");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id1_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id1_argument'}->createConditionValue();
if(!${'user_id1_argument'}->isValid()) return ${'user_id1_argument'}->getErrorMessage();
} else
${'user_id1_argument'} = NULL;if(${'user_id1_argument'} !== null) ${'user_id1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>