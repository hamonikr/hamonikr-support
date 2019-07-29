<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate25_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate25_argument'}->createConditionValue();
if(!${'regDate25_argument'}->isValid()) return ${'regDate25_argument'}->getErrorMessage();
} else
${'regDate25_argument'} = NULL;if(${'regDate25_argument'} !== null) ${'regDate25_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate25_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>