<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleMidList");
$query->setAction("select");
$query->setPriority("");

${'module53_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module53_argument'}->checkNotNull();
${'module53_argument'}->createConditionValue();
if(!${'module53_argument'}->isValid()) return ${'module53_argument'}->getErrorMessage();
if(${'module53_argument'} !== null) ${'module53_argument'}->setColumnType('varchar');

${'site_srl54_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'in');
${'site_srl54_argument'}->ensureDefaultValue('0');
${'site_srl54_argument'}->checkNotNull();
${'site_srl54_argument'}->createConditionValue();
if(!${'site_srl54_argument'}->isValid()) return ${'site_srl54_argument'}->getErrorMessage();
if(${'site_srl54_argument'} !== null) ${'site_srl54_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl55_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl55_argument'}->createConditionValue();
if(!${'module_srl55_argument'}->isValid()) return ${'module_srl55_argument'}->getErrorMessage();
} else
${'module_srl55_argument'} = NULL;if(${'module_srl55_argument'} !== null) ${'module_srl55_argument'}->setColumnType('number');
if(isset($args->s_mid)) {
${'s_mid56_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid56_argument'}->createConditionValue();
if(!${'s_mid56_argument'}->isValid()) return ${'s_mid56_argument'}->getErrorMessage();
} else
${'s_mid56_argument'} = NULL;if(${'s_mid56_argument'} !== null) ${'s_mid56_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title57_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title57_argument'}->createConditionValue();
if(!${'s_title57_argument'}->isValid()) return ${'s_title57_argument'}->getErrorMessage();
} else
${'s_title57_argument'} = NULL;
${'page59_argument'} = new Argument('page', $args->{'page'});
${'page59_argument'}->ensureDefaultValue('1');
if(!${'page59_argument'}->isValid()) return ${'page59_argument'}->getErrorMessage();

${'page_count60_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count60_argument'}->ensureDefaultValue('10');
if(!${'page_count60_argument'}->isValid()) return ${'page_count60_argument'}->getErrorMessage();

${'list_count61_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count61_argument'}->ensureDefaultValue('20');
if(!${'list_count61_argument'}->isValid()) return ${'list_count61_argument'}->getErrorMessage();

${'sort_index58_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index58_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index58_argument'}->isValid()) return ${'sort_index58_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module53_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl54_argument,"in", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl55_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid56_argument,"like", 'or')
,new ConditionWithArgument('`title`',$s_title57_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index58_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count61_argument'}, ${'page59_argument'}, ${'page_count60_argument'}));
return $query; ?>