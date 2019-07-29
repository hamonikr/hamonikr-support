<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCommentsList");
$query->setAction("delete");
$query->setPriority("");

${'document_srl5_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->checkNotNull();
${'document_srl5_argument'}->createConditionValue();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>