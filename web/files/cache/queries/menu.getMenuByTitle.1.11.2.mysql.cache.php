<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title155_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title155_argument'}->checkNotNull();
${'title155_argument'}->createConditionValue();
if(!${'title155_argument'}->isValid()) return ${'title155_argument'}->getErrorMessage();
if(${'title155_argument'} !== null) ${'title155_argument'}->setColumnType('varchar');

${'site_srl156_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl156_argument'}->ensureDefaultValue('0');
${'site_srl156_argument'}->createConditionValue();
if(!${'site_srl156_argument'}->isValid()) return ${'site_srl156_argument'}->getErrorMessage();
if(${'site_srl156_argument'} !== null) ${'site_srl156_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title155_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl156_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>