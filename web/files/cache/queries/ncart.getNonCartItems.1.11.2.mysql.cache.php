<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNonCartItems");
$query->setAction("select");
$query->setPriority("");

${'non_key1_argument'} = new ConditionArgument('non_key', $args->non_key, 'equal');
${'non_key1_argument'}->checkNotNull();
${'non_key1_argument'}->createConditionValue();
if(!${'non_key1_argument'}->isValid()) return ${'non_key1_argument'}->getErrorMessage();
if(${'non_key1_argument'} !== null) ${'non_key1_argument'}->setColumnType('varchar');
if(isset($args->cartnos)) {
${'cartnos2_argument'} = new ConditionArgument('cartnos', $args->cartnos, 'in');
${'cartnos2_argument'}->createConditionValue();
if(!${'cartnos2_argument'}->isValid()) return ${'cartnos2_argument'}->getErrorMessage();
} else
${'cartnos2_argument'} = NULL;if(${'cartnos2_argument'} !== null) ${'cartnos2_argument'}->setColumnType('number');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`non_key`',$non_key1_argument,"equal")
,new ConditionWithoutArgument('`order_status`','0',"equal", 'and')
,new ConditionWithArgument('`cart_srl`',$cartnos2_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "desc")
));
$query->setLimit();
return $query; ?>