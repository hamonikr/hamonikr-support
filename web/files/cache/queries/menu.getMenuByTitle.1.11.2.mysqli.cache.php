<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title1_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title1_argument'}->checkNotNull();
${'title1_argument'}->createConditionValue();
if(!${'title1_argument'}->isValid()) return ${'title1_argument'}->getErrorMessage();
if(${'title1_argument'} !== null) ${'title1_argument'}->setColumnType('varchar');

${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->ensureDefaultValue('0');
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title1_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>