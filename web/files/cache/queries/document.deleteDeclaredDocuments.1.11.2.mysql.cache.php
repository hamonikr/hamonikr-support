<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclaredDocuments");
$query->setAction("delete");
$query->setPriority("");

${'document_srl7_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl7_argument'}->checkFilter('number');
${'document_srl7_argument'}->checkNotNull();
${'document_srl7_argument'}->createConditionValue();
if(!${'document_srl7_argument'}->isValid()) return ${'document_srl7_argument'}->getErrorMessage();
if(${'document_srl7_argument'} !== null) ${'document_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_declared`', '`document_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl7_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>