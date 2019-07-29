<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getEpayList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_mid)) {
${'s_mid1_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid1_argument'}->createConditionValue();
if(!${'s_mid1_argument'}->isValid()) return ${'s_mid1_argument'}->getErrorMessage();
} else
${'s_mid1_argument'} = NULL;if(${'s_mid1_argument'} !== null) ${'s_mid1_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title2_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title2_argument'}->createConditionValue();
if(!${'s_title2_argument'}->isValid()) return ${'s_title2_argument'}->getErrorMessage();
} else
${'s_title2_argument'} = NULL;if(isset($args->s_comment)) {
${'s_comment3_argument'} = new ConditionArgument('s_comment', $args->s_comment, 'like');
${'s_comment3_argument'}->createConditionValue();
if(!${'s_comment3_argument'}->isValid()) return ${'s_comment3_argument'}->getErrorMessage();
} else
${'s_comment3_argument'} = NULL;if(isset($args->s_module)) {
${'s_module4_argument'} = new ConditionArgument('s_module', $args->s_module, 'equal');
${'s_module4_argument'}->createConditionValue();
if(!${'s_module4_argument'}->isValid()) return ${'s_module4_argument'}->getErrorMessage();
} else
${'s_module4_argument'} = NULL;if(${'s_module4_argument'} !== null) ${'s_module4_argument'}->setColumnType('varchar');
if(isset($args->s_module_category_srl)) {
${'s_module_category_srl5_argument'} = new ConditionArgument('s_module_category_srl', $args->s_module_category_srl, 'equal');
${'s_module_category_srl5_argument'}->createConditionValue();
if(!${'s_module_category_srl5_argument'}->isValid()) return ${'s_module_category_srl5_argument'}->getErrorMessage();
} else
${'s_module_category_srl5_argument'} = NULL;if(${'s_module_category_srl5_argument'} !== null) ${'s_module_category_srl5_argument'}->setColumnType('number');

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
new ConditionWithoutArgument('`module`',"'epay'","equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid1_argument,"like", 'or')
,new ConditionWithArgument('`title`',$s_title2_argument,"like", 'or')
,new ConditionWithArgument('`comment`',$s_comment3_argument,"like", 'or')
,new ConditionWithArgument('`module`',$s_module4_argument,"equal", 'or')
,new ConditionWithArgument('`module_category_srl`',$s_module_category_srl5_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>