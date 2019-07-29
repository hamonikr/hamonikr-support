<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteHistory");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->history_srl)) {
${'history_srl32_argument'} = new ConditionArgument('history_srl', $args->history_srl, 'equal');
${'history_srl32_argument'}->checkFilter('number');
${'history_srl32_argument'}->createConditionValue();
if(!${'history_srl32_argument'}->isValid()) return ${'history_srl32_argument'}->getErrorMessage();
} else
${'history_srl32_argument'} = NULL;if(${'history_srl32_argument'} !== null) ${'history_srl32_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl33_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl33_argument'}->checkFilter('number');
${'document_srl33_argument'}->createConditionValue();
if(!${'document_srl33_argument'}->isValid()) return ${'document_srl33_argument'}->getErrorMessage();
} else
${'document_srl33_argument'} = NULL;if(${'document_srl33_argument'} !== null) ${'document_srl33_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl34_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl34_argument'}->checkFilter('number');
${'module_srl34_argument'}->createConditionValue();
if(!${'module_srl34_argument'}->isValid()) return ${'module_srl34_argument'}->getErrorMessage();
} else
${'module_srl34_argument'} = NULL;if(${'module_srl34_argument'} !== null) ${'module_srl34_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_histories`', '`document_histories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`history_srl`',$history_srl32_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl33_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl34_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>