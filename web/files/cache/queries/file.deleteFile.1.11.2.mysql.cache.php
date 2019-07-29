<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFile");
$query->setAction("delete");
$query->setPriority("");

${'file_srl2_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl2_argument'}->checkFilter('number');
${'file_srl2_argument'}->checkNotNull();
${'file_srl2_argument'}->createConditionValue();
if(!${'file_srl2_argument'}->isValid()) return ${'file_srl2_argument'}->getErrorMessage();
if(${'file_srl2_argument'} !== null) ${'file_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>