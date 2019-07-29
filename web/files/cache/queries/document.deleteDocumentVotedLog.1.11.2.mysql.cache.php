<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentVotedLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl10_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl10_argument'}->checkFilter('number');
${'document_srl10_argument'}->checkNotNull();
${'document_srl10_argument'}->createConditionValue();
if(!${'document_srl10_argument'}->isValid()) return ${'document_srl10_argument'}->getErrorMessage();
if(${'document_srl10_argument'} !== null) ${'document_srl10_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_voted_log`', '`document_voted_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl10_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>