<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title199_argument'} = new Argument('title', $args->{'title'});
if(!${'title199_argument'}->isValid()) return ${'title199_argument'}->getErrorMessage();
} else
${'title199_argument'} = NULL;if(${'title199_argument'} !== null) ${'title199_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars200_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars200_argument'}->isValid()) return ${'extra_vars200_argument'}->getErrorMessage();
} else
${'extra_vars200_argument'} = NULL;if(${'extra_vars200_argument'} !== null) ${'extra_vars200_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout201_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout201_argument'}->isValid()) return ${'layout201_argument'}->getErrorMessage();
} else
${'layout201_argument'} = NULL;if(${'layout201_argument'} !== null) ${'layout201_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path202_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path202_argument'}->isValid()) return ${'layout_path202_argument'}->getErrorMessage();
} else
${'layout_path202_argument'} = NULL;if(${'layout_path202_argument'} !== null) ${'layout_path202_argument'}->setColumnType('varchar');

${'layout_srl203_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl203_argument'}->checkFilter('number');
${'layout_srl203_argument'}->checkNotNull();
${'layout_srl203_argument'}->createConditionValue();
if(!${'layout_srl203_argument'}->isValid()) return ${'layout_srl203_argument'}->getErrorMessage();
if(${'layout_srl203_argument'} !== null) ${'layout_srl203_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title199_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars200_argument'})
,new UpdateExpression('`layout`', ${'layout201_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path202_argument'})
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl203_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>