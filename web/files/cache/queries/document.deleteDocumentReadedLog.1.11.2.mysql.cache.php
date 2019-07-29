<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentReadedLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl9_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->checkNotNull();
${'document_srl9_argument'}->createConditionValue();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_readed_log`', '`document_readed_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl9_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>