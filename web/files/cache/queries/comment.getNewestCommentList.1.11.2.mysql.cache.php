<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status64_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status64_argument'}->createConditionValue();
if(!${'status64_argument'}->isValid()) return ${'status64_argument'}->getErrorMessage();
} else
${'status64_argument'} = NULL;if(${'status64_argument'} !== null) ${'status64_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl65_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl65_argument'}->checkFilter('number');
${'module_srl65_argument'}->createConditionValue();
if(!${'module_srl65_argument'}->isValid()) return ${'module_srl65_argument'}->getErrorMessage();
} else
${'module_srl65_argument'} = NULL;if(${'module_srl65_argument'} !== null) ${'module_srl65_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl66_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl66_argument'}->checkFilter('number');
${'document_srl66_argument'}->createConditionValue();
if(!${'document_srl66_argument'}->isValid()) return ${'document_srl66_argument'}->getErrorMessage();
} else
${'document_srl66_argument'} = NULL;if(${'document_srl66_argument'} !== null) ${'document_srl66_argument'}->setColumnType('number');

${'list_count68_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count68_argument'}->ensureDefaultValue('20');
if(!${'list_count68_argument'}->isValid()) return ${'list_count68_argument'}->getErrorMessage();

${'sort_index67_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index67_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index67_argument'}->isValid()) return ${'sort_index67_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status64_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl65_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl66_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index67_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count68_argument'}));
return $query; ?>