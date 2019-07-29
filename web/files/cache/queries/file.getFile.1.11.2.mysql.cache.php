<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFile");
$query->setAction("select");
$query->setPriority("");

${'file_srl1_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'in');
${'file_srl1_argument'}->checkFilter('number');
${'file_srl1_argument'}->checkNotNull();
${'file_srl1_argument'}->createConditionValue();
if(!${'file_srl1_argument'}->isValid()) return ${'file_srl1_argument'}->getErrorMessage();
if(${'file_srl1_argument'} !== null) ${'file_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>