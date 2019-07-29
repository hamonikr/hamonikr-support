<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->module_srls)) {
${'module_srls2_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls2_argument'}->createConditionValue();
if(!${'module_srls2_argument'}->isValid()) return ${'module_srls2_argument'}->getErrorMessage();
} else
${'module_srls2_argument'} = NULL;if(${'module_srls2_argument'} !== null) ${'module_srls2_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
} else
${'site_srl3_argument'} = NULL;if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module4_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module4_argument'}->createConditionValue();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
} else
${'module4_argument'} = NULL;if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl5_argument'} = new ConditionArgument('module_category_srl', $args->module_category_srl, 'equal');
${'module_category_srl5_argument'}->createConditionValue();
if(!${'module_category_srl5_argument'}->isValid()) return ${'module_category_srl5_argument'}->getErrorMessage();
} else
${'module_category_srl5_argument'} = NULL;if(${'module_category_srl5_argument'} !== null) ${'module_category_srl5_argument'}->setColumnType('number');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('browser_title');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srls2_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`module`',$module4_argument,"equal", 'and')
,new ConditionWithArgument('`module_category_srl`',$module_category_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "asc")
));
$query->setLimit();
return $query; ?>