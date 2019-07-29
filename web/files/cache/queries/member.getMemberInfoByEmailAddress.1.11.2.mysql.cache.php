<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByEmailAddress");
$query->setAction("select");
$query->setPriority("");

${'email_address99_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address99_argument'}->checkNotNull();
${'email_address99_argument'}->createConditionValue();
if(!${'email_address99_argument'}->isValid()) return ${'email_address99_argument'}->getErrorMessage();
if(${'email_address99_argument'} !== null) ${'email_address99_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`email_address`',$email_address99_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>