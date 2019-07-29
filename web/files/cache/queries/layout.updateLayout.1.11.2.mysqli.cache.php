<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title7_argument'} = new Argument('title', $args->{'title'});
if(!${'title7_argument'}->isValid()) return ${'title7_argument'}->getErrorMessage();
} else
${'title7_argument'} = NULL;if(${'title7_argument'} !== null) ${'title7_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars8_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars8_argument'}->isValid()) return ${'extra_vars8_argument'}->getErrorMessage();
} else
${'extra_vars8_argument'} = NULL;if(${'extra_vars8_argument'} !== null) ${'extra_vars8_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout9_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout9_argument'}->isValid()) return ${'layout9_argument'}->getErrorMessage();
} else
${'layout9_argument'} = NULL;if(${'layout9_argument'} !== null) ${'layout9_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path10_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path10_argument'}->isValid()) return ${'layout_path10_argument'}->getErrorMessage();
} else
${'layout_path10_argument'} = NULL;if(${'layout_path10_argument'} !== null) ${'layout_path10_argument'}->setColumnType('varchar');

${'layout_srl11_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl11_argument'}->checkFilter('number');
${'layout_srl11_argument'}->checkNotNull();
${'layout_srl11_argument'}->createConditionValue();
if(!${'layout_srl11_argument'}->isValid()) return ${'layout_srl11_argument'}->getErrorMessage();
if(${'layout_srl11_argument'} !== null) ${'layout_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title7_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars8_argument'})
,new UpdateExpression('`layout`', ${'layout9_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path10_argument'})
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>