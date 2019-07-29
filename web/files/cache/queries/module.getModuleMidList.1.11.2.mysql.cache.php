<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleMidList");
$query->setAction("select");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'in');
${'site_srl2_argument'}->ensureDefaultValue('0');
${'site_srl2_argument'}->checkNotNull();
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');
if(isset($args->s_mid)) {
${'s_mid4_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid4_argument'}->createConditionValue();
if(!${'s_mid4_argument'}->isValid()) return ${'s_mid4_argument'}->getErrorMessage();
} else
${'s_mid4_argument'} = NULL;if(${'s_mid4_argument'} !== null) ${'s_mid4_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title5_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title5_argument'}->createConditionValue();
if(!${'s_title5_argument'}->isValid()) return ${'s_title5_argument'}->getErrorMessage();
} else
${'s_title5_argument'} = NULL;
${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('20');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl2_argument,"in", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl3_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid4_argument,"like", 'or')
,new ConditionWithArgument('`title`',$s_title5_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>