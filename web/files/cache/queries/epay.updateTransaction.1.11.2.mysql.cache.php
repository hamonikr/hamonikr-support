<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTransaction");
$query->setAction("update");
$query->setPriority("");
if(isset($args->state)) {
${'state2_argument'} = new Argument('state', $args->{'state'});
if(!${'state2_argument'}->isValid()) return ${'state2_argument'}->getErrorMessage();
} else
${'state2_argument'} = NULL;if(${'state2_argument'} !== null) ${'state2_argument'}->setColumnType('char');
if(isset($args->result_code)) {
${'result_code3_argument'} = new Argument('result_code', $args->{'result_code'});
if(!${'result_code3_argument'}->isValid()) return ${'result_code3_argument'}->getErrorMessage();
} else
${'result_code3_argument'} = NULL;if(${'result_code3_argument'} !== null) ${'result_code3_argument'}->setColumnType('varchar');
if(isset($args->result_message)) {
${'result_message4_argument'} = new Argument('result_message', $args->{'result_message'});
if(!${'result_message4_argument'}->isValid()) return ${'result_message4_argument'}->getErrorMessage();
} else
${'result_message4_argument'} = NULL;if(${'result_message4_argument'} !== null) ${'result_message4_argument'}->setColumnType('varchar');
if(isset($args->pg_tid)) {
${'pg_tid5_argument'} = new Argument('pg_tid', $args->{'pg_tid'});
if(!${'pg_tid5_argument'}->isValid()) return ${'pg_tid5_argument'}->getErrorMessage();
} else
${'pg_tid5_argument'} = NULL;if(${'pg_tid5_argument'} !== null) ${'pg_tid5_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars6_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars6_argument'}->isValid()) return ${'extra_vars6_argument'}->getErrorMessage();
} else
${'extra_vars6_argument'} = NULL;if(${'extra_vars6_argument'} !== null) ${'extra_vars6_argument'}->setColumnType('text');

${'transaction_srl7_argument'} = new ConditionArgument('transaction_srl', $args->transaction_srl, 'equal');
${'transaction_srl7_argument'}->checkFilter('number');
${'transaction_srl7_argument'}->checkNotNull();
${'transaction_srl7_argument'}->createConditionValue();
if(!${'transaction_srl7_argument'}->isValid()) return ${'transaction_srl7_argument'}->getErrorMessage();
if(${'transaction_srl7_argument'} !== null) ${'transaction_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`state`', ${'state2_argument'})
,new UpdateExpression('`result_code`', ${'result_code3_argument'})
,new UpdateExpression('`result_message`', ${'result_message4_argument'})
,new UpdateExpression('`pg_tid`', ${'pg_tid5_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars6_argument'})
));
$query->setTables(array(
new Table('`hme_epay_transactions`', '`epay_transactions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`transaction_srl`',$transaction_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>