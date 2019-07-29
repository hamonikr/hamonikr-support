<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComment");
$query->setAction("select");
$query->setPriority("");

${'comment_srl1_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl1_argument'}->checkFilter('number');
${'comment_srl1_argument'}->checkNotNull();
${'comment_srl1_argument'}->createConditionValue();
if(!${'comment_srl1_argument'}->isValid()) return ${'comment_srl1_argument'}->getErrorMessage();
if(${'comment_srl1_argument'} !== null) ${'comment_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>