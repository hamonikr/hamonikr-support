<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFavorite");
$query->setAction("delete");
$query->setPriority("");

${'admin_favorite_srl1_argument'} = new ConditionArgument('admin_favorite_srl', $args->admin_favorite_srl, 'equal');
${'admin_favorite_srl1_argument'}->checkFilter('number');
${'admin_favorite_srl1_argument'}->checkNotNull();
${'admin_favorite_srl1_argument'}->createConditionValue();
if(!${'admin_favorite_srl1_argument'}->isValid()) return ${'admin_favorite_srl1_argument'}->getErrorMessage();
if(${'admin_favorite_srl1_argument'} !== null) ${'admin_favorite_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`admin_favorite_srl`',$admin_favorite_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>