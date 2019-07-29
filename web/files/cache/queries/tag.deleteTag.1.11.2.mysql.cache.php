<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl252_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl252_argument'}->checkFilter('number');
${'document_srl252_argument'}->checkNotNull();
${'document_srl252_argument'}->createConditionValue();
if(!${'document_srl252_argument'}->isValid()) return ${'document_srl252_argument'}->getErrorMessage();
if(${'document_srl252_argument'} !== null) ${'document_srl252_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl252_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>