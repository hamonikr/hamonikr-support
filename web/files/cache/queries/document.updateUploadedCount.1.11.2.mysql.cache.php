<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUploadedCount");
$query->setAction("update");
$query->setPriority("");

${'uploaded_count3_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count3_argument'}->checkFilter('number');
${'uploaded_count3_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count3_argument'}->isValid()) return ${'uploaded_count3_argument'}->getErrorMessage();
if(${'uploaded_count3_argument'} !== null) ${'uploaded_count3_argument'}->setColumnType('number');

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`uploaded_count`', ${'uploaded_count3_argument'})
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>