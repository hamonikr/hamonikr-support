<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url25_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url25_argument'}->checkNotNull();
${'url25_argument'}->createConditionValue();
if(!${'url25_argument'}->isValid()) return ${'url25_argument'}->getErrorMessage();
if(${'url25_argument'} !== null) ${'url25_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut26_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut26_argument'}->createConditionValue();
if(!${'is_shortcut26_argument'}->isValid()) return ${'is_shortcut26_argument'}->getErrorMessage();
} else
${'is_shortcut26_argument'} = NULL;if(${'is_shortcut26_argument'} !== null) ${'is_shortcut26_argument'}->setColumnType('char');

${'site_srl27_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl27_argument'}->checkNotNull();
${'site_srl27_argument'}->createConditionValue();
if(!${'site_srl27_argument'}->isValid()) return ${'site_srl27_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url25_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut26_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`hme_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl27_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>