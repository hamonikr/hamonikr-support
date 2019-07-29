<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url274_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url274_argument'}->checkNotNull();
${'url274_argument'}->createConditionValue();
if(!${'url274_argument'}->isValid()) return ${'url274_argument'}->getErrorMessage();
if(${'url274_argument'} !== null) ${'url274_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut275_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut275_argument'}->createConditionValue();
if(!${'is_shortcut275_argument'}->isValid()) return ${'is_shortcut275_argument'}->getErrorMessage();
} else
${'is_shortcut275_argument'} = NULL;if(${'is_shortcut275_argument'} !== null) ${'is_shortcut275_argument'}->setColumnType('char');

${'site_srl276_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl276_argument'}->checkNotNull();
${'site_srl276_argument'}->createConditionValue();
if(!${'site_srl276_argument'}->isValid()) return ${'site_srl276_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url274_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut275_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`hme_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl276_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>