<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateNonCartItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->del_non_key)) {
${'del_non_key2_argument'} = new Argument('del_non_key', $args->{'del_non_key'});
if(!${'del_non_key2_argument'}->isValid()) return ${'del_non_key2_argument'}->getErrorMessage();
} else
${'del_non_key2_argument'} = NULL;if(${'del_non_key2_argument'} !== null) ${'del_non_key2_argument'}->setColumnType('varchar');

${'non_key3_argument'} = new ConditionArgument('non_key', $args->non_key, 'equal');
${'non_key3_argument'}->checkNotNull();
${'non_key3_argument'}->createConditionValue();
if(!${'non_key3_argument'}->isValid()) return ${'non_key3_argument'}->getErrorMessage();
if(${'non_key3_argument'} !== null) ${'non_key3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl1_argument'})
,new UpdateExpression('`non_key`', ${'del_non_key2_argument'})
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`non_key`',$non_key3_argument,"equal")
,new ConditionWithoutArgument('`order_status`','0',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>