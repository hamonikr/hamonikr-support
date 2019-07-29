<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModInstList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_category_srl)) {
${'s_module_category_srl1_argument'} = new ConditionArgument('s_module_category_srl', $args->s_module_category_srl, 'equal');
${'s_module_category_srl1_argument'}->createConditionValue();
if(!${'s_module_category_srl1_argument'}->isValid()) return ${'s_module_category_srl1_argument'}->getErrorMessage();
} else
${'s_module_category_srl1_argument'} = NULL;if(${'s_module_category_srl1_argument'} !== null) ${'s_module_category_srl1_argument'}->setColumnType('number');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'cashpay'","equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$s_module_category_srl1_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>