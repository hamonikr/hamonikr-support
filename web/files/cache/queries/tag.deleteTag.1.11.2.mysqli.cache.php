<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl39_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl39_argument'}->checkFilter('number');
${'document_srl39_argument'}->checkNotNull();
${'document_srl39_argument'}->createConditionValue();
if(!${'document_srl39_argument'}->isValid()) return ${'document_srl39_argument'}->getErrorMessage();
if(${'document_srl39_argument'} !== null) ${'document_srl39_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl39_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>