<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavorite");
$query->setAction("select");
$query->setPriority("");
if(isset($args->favorite_srl)) {
${'favorite_srl1_argument'} = new ConditionArgument('favorite_srl', $args->favorite_srl, 'equal');
${'favorite_srl1_argument'}->createConditionValue();
if(!${'favorite_srl1_argument'}->isValid()) return ${'favorite_srl1_argument'}->getErrorMessage();
} else
${'favorite_srl1_argument'} = NULL;if(${'favorite_srl1_argument'} !== null) ${'favorite_srl1_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
} else
${'site_srl2_argument'} = NULL;if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module3_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module3_argument'}->createConditionValue();
if(!${'module3_argument'}->isValid()) return ${'module3_argument'}->getErrorMessage();
} else
${'module3_argument'} = NULL;if(${'module3_argument'} !== null) ${'module3_argument'}->setColumnType('varchar');

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('admin_favorite_srl');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`admin_favorite_srl`',$favorite_srl1_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`module`',$module3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "desc")
));
$query->setLimit();
return $query; ?>