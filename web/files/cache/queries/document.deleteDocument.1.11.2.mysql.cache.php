<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocument");
$query->setAction("delete");
$query->setPriority("LOW");

${'document_srl1_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
${'document_srl1_argument'}->createConditionValue();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>