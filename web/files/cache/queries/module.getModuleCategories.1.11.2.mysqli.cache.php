<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleCategorySrl)) {
${'moduleCategorySrl1_argument'} = new ConditionArgument('moduleCategorySrl', $args->moduleCategorySrl, 'in');
${'moduleCategorySrl1_argument'}->createConditionValue();
if(!${'moduleCategorySrl1_argument'}->isValid()) return ${'moduleCategorySrl1_argument'}->getErrorMessage();
} else
${'moduleCategorySrl1_argument'} = NULL;if(${'moduleCategorySrl1_argument'} !== null) ${'moduleCategorySrl1_argument'}->setColumnType('number');

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('title');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_categories`', '`module_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$moduleCategorySrl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>