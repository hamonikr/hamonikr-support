<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl190_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl190_argument'}->checkFilter('number');
${'layout_srl190_argument'}->checkNotNull();
if(!${'layout_srl190_argument'}->isValid()) return ${'layout_srl190_argument'}->getErrorMessage();
if(${'layout_srl190_argument'} !== null) ${'layout_srl190_argument'}->setColumnType('number');

${'site_srl191_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl191_argument'}->checkFilter('number');
${'site_srl191_argument'}->ensureDefaultValue('0');
${'site_srl191_argument'}->checkNotNull();
if(!${'site_srl191_argument'}->isValid()) return ${'site_srl191_argument'}->getErrorMessage();
if(${'site_srl191_argument'} !== null) ${'site_srl191_argument'}->setColumnType('number');

${'layout192_argument'} = new Argument('layout', $args->{'layout'});
${'layout192_argument'}->checkNotNull();
if(!${'layout192_argument'}->isValid()) return ${'layout192_argument'}->getErrorMessage();
if(${'layout192_argument'} !== null) ${'layout192_argument'}->setColumnType('varchar');

${'title193_argument'} = new Argument('title', $args->{'title'});
${'title193_argument'}->checkNotNull();
if(!${'title193_argument'}->isValid()) return ${'title193_argument'}->getErrorMessage();
if(${'title193_argument'} !== null) ${'title193_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl194_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl194_argument'}->isValid()) return ${'module_srl194_argument'}->getErrorMessage();
} else
${'module_srl194_argument'} = NULL;if(${'module_srl194_argument'} !== null) ${'module_srl194_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars195_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars195_argument'}->isValid()) return ${'extra_vars195_argument'}->getErrorMessage();
} else
${'extra_vars195_argument'} = NULL;if(${'extra_vars195_argument'} !== null) ${'extra_vars195_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path196_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path196_argument'}->isValid()) return ${'layout_path196_argument'}->getErrorMessage();
} else
${'layout_path196_argument'} = NULL;if(${'layout_path196_argument'} !== null) ${'layout_path196_argument'}->setColumnType('varchar');

${'regdate197_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate197_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate197_argument'}->isValid()) return ${'regdate197_argument'}->getErrorMessage();
if(${'regdate197_argument'} !== null) ${'regdate197_argument'}->setColumnType('date');

${'layout_type198_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type198_argument'}->ensureDefaultValue('P');
if(!${'layout_type198_argument'}->isValid()) return ${'layout_type198_argument'}->getErrorMessage();
if(${'layout_type198_argument'} !== null) ${'layout_type198_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl190_argument'})
,new InsertExpression('`site_srl`', ${'site_srl191_argument'})
,new InsertExpression('`layout`', ${'layout192_argument'})
,new InsertExpression('`title`', ${'title193_argument'})
,new InsertExpression('`module_srl`', ${'module_srl194_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars195_argument'})
,new InsertExpression('`layout_path`', ${'layout_path196_argument'})
,new InsertExpression('`regdate`', ${'regdate197_argument'})
,new InsertExpression('`layout_type`', ${'layout_type198_argument'})
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>