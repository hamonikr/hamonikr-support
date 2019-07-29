<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentDeclaredLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl8_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl8_argument'}->checkFilter('number');
${'document_srl8_argument'}->checkNotNull();
${'document_srl8_argument'}->createConditionValue();
if(!${'document_srl8_argument'}->isValid()) return ${'document_srl8_argument'}->getErrorMessage();
if(${'document_srl8_argument'} !== null) ${'document_srl8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_declared_log`', '`document_declared_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl8_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>