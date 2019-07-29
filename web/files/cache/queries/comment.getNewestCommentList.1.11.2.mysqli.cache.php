<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status47_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status47_argument'}->createConditionValue();
if(!${'status47_argument'}->isValid()) return ${'status47_argument'}->getErrorMessage();
} else
${'status47_argument'} = NULL;if(${'status47_argument'} !== null) ${'status47_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl48_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl48_argument'}->checkFilter('number');
${'module_srl48_argument'}->createConditionValue();
if(!${'module_srl48_argument'}->isValid()) return ${'module_srl48_argument'}->getErrorMessage();
} else
${'module_srl48_argument'} = NULL;if(${'module_srl48_argument'} !== null) ${'module_srl48_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl49_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl49_argument'}->checkFilter('number');
${'document_srl49_argument'}->createConditionValue();
if(!${'document_srl49_argument'}->isValid()) return ${'document_srl49_argument'}->getErrorMessage();
} else
${'document_srl49_argument'} = NULL;if(${'document_srl49_argument'} !== null) ${'document_srl49_argument'}->setColumnType('number');

${'list_count51_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count51_argument'}->ensureDefaultValue('20');
if(!${'list_count51_argument'}->isValid()) return ${'list_count51_argument'}->getErrorMessage();

${'sort_index50_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index50_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index50_argument'}->isValid()) return ${'sort_index50_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status47_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl48_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl49_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index50_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count51_argument'}));
return $query; ?>