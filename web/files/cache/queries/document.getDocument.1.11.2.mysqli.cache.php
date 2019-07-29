<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>