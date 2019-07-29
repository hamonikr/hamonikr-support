<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTransactionInfo");
$query->setAction("select");
$query->setPriority("");

${'transaction_srl1_argument'} = new ConditionArgument('transaction_srl', $args->transaction_srl, 'equal');
${'transaction_srl1_argument'}->checkNotNull();
${'transaction_srl1_argument'}->createConditionValue();
if(!${'transaction_srl1_argument'}->isValid()) return ${'transaction_srl1_argument'}->getErrorMessage();
if(${'transaction_srl1_argument'} !== null) ${'transaction_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_epay_transactions`', '`epay_transactions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`transaction_srl`',$transaction_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>