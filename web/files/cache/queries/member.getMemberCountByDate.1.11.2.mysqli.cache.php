<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate8_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate8_argument'}->createConditionValue();
if(!${'regDate8_argument'}->isValid()) return ${'regDate8_argument'}->getErrorMessage();
} else
${'regDate8_argument'} = NULL;if(${'regDate8_argument'} !== null) ${'regDate8_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate8_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>