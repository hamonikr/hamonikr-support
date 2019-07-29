<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTransaction");
$query->setAction("insert");
$query->setPriority("");

${'transaction_srl83_argument'} = new Argument('transaction_srl', $args->{'transaction_srl'});
${'transaction_srl83_argument'}->checkFilter('number');
${'transaction_srl83_argument'}->checkNotNull();
if(!${'transaction_srl83_argument'}->isValid()) return ${'transaction_srl83_argument'}->getErrorMessage();
if(${'transaction_srl83_argument'} !== null) ${'transaction_srl83_argument'}->setColumnType('number');

${'epay_module_srl84_argument'} = new Argument('epay_module_srl', $args->{'epay_module_srl'});
${'epay_module_srl84_argument'}->checkNotNull();
if(!${'epay_module_srl84_argument'}->isValid()) return ${'epay_module_srl84_argument'}->getErrorMessage();
if(${'epay_module_srl84_argument'} !== null) ${'epay_module_srl84_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl85_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl85_argument'}->isValid()) return ${'module_srl85_argument'}->getErrorMessage();
} else
${'module_srl85_argument'} = NULL;if(${'module_srl85_argument'} !== null) ${'module_srl85_argument'}->setColumnType('number');
if(isset($args->plugin_srl)) {
${'plugin_srl86_argument'} = new Argument('plugin_srl', $args->{'plugin_srl'});
if(!${'plugin_srl86_argument'}->isValid()) return ${'plugin_srl86_argument'}->getErrorMessage();
} else
${'plugin_srl86_argument'} = NULL;if(${'plugin_srl86_argument'} !== null) ${'plugin_srl86_argument'}->setColumnType('number');

${'target_module87_argument'} = new Argument('target_module', $args->{'target_module'});
${'target_module87_argument'}->checkNotNull();
if(!${'target_module87_argument'}->isValid()) return ${'target_module87_argument'}->getErrorMessage();
if(${'target_module87_argument'} !== null) ${'target_module87_argument'}->setColumnType('varchar');

${'order_srl88_argument'} = new Argument('order_srl', $args->{'order_srl'});
${'order_srl88_argument'}->checkNotNull();
if(!${'order_srl88_argument'}->isValid()) return ${'order_srl88_argument'}->getErrorMessage();
if(${'order_srl88_argument'} !== null) ${'order_srl88_argument'}->setColumnType('number');
if(isset($args->order_title)) {
${'order_title89_argument'} = new Argument('order_title', $args->{'order_title'});
if(!${'order_title89_argument'}->isValid()) return ${'order_title89_argument'}->getErrorMessage();
} else
${'order_title89_argument'} = NULL;if(${'order_title89_argument'} !== null) ${'order_title89_argument'}->setColumnType('varchar');

${'payment_method90_argument'} = new Argument('payment_method', $args->{'payment_method'});
${'payment_method90_argument'}->checkNotNull();
if(!${'payment_method90_argument'}->isValid()) return ${'payment_method90_argument'}->getErrorMessage();
if(${'payment_method90_argument'} !== null) ${'payment_method90_argument'}->setColumnType('varchar');

${'payment_amount91_argument'} = new Argument('payment_amount', $args->{'payment_amount'});
${'payment_amount91_argument'}->checkNotNull();
if(!${'payment_amount91_argument'}->isValid()) return ${'payment_amount91_argument'}->getErrorMessage();
if(${'payment_amount91_argument'} !== null) ${'payment_amount91_argument'}->setColumnType('number');

${'p_member_srl92_argument'} = new Argument('p_member_srl', $args->{'p_member_srl'});
${'p_member_srl92_argument'}->ensureDefaultValue('0');
${'p_member_srl92_argument'}->checkNotNull();
if(!${'p_member_srl92_argument'}->isValid()) return ${'p_member_srl92_argument'}->getErrorMessage();
if(${'p_member_srl92_argument'} !== null) ${'p_member_srl92_argument'}->setColumnType('number');

${'p_user_id93_argument'} = new Argument('p_user_id', $args->{'p_user_id'});
${'p_user_id93_argument'}->ensureDefaultValue('');
${'p_user_id93_argument'}->checkNotNull();
if(!${'p_user_id93_argument'}->isValid()) return ${'p_user_id93_argument'}->getErrorMessage();
if(${'p_user_id93_argument'} !== null) ${'p_user_id93_argument'}->setColumnType('varchar');

${'p_name94_argument'} = new Argument('p_name', $args->{'p_name'});
${'p_name94_argument'}->ensureDefaultValue('');
${'p_name94_argument'}->checkNotNull();
if(!${'p_name94_argument'}->isValid()) return ${'p_name94_argument'}->getErrorMessage();
if(${'p_name94_argument'} !== null) ${'p_name94_argument'}->setColumnType('varchar');

${'p_email_address95_argument'} = new Argument('p_email_address', $args->{'p_email_address'});
${'p_email_address95_argument'}->ensureDefaultValue('');
${'p_email_address95_argument'}->checkNotNull();
if(!${'p_email_address95_argument'}->isValid()) return ${'p_email_address95_argument'}->getErrorMessage();
if(${'p_email_address95_argument'} !== null) ${'p_email_address95_argument'}->setColumnType('varchar');

${'result_code96_argument'} = new Argument('result_code', $args->{'result_code'});
${'result_code96_argument'}->checkNotNull();
if(!${'result_code96_argument'}->isValid()) return ${'result_code96_argument'}->getErrorMessage();
if(${'result_code96_argument'} !== null) ${'result_code96_argument'}->setColumnType('varchar');

${'result_message97_argument'} = new Argument('result_message', $args->{'result_message'});
${'result_message97_argument'}->checkNotNull();
if(!${'result_message97_argument'}->isValid()) return ${'result_message97_argument'}->getErrorMessage();
if(${'result_message97_argument'} !== null) ${'result_message97_argument'}->setColumnType('varchar');
if(isset($args->pg_tid)) {
${'pg_tid98_argument'} = new Argument('pg_tid', $args->{'pg_tid'});
if(!${'pg_tid98_argument'}->isValid()) return ${'pg_tid98_argument'}->getErrorMessage();
} else
${'pg_tid98_argument'} = NULL;if(${'pg_tid98_argument'} !== null) ${'pg_tid98_argument'}->setColumnType('varchar');

${'state99_argument'} = new Argument('state', $args->{'state'});
${'state99_argument'}->checkNotNull();
if(!${'state99_argument'}->isValid()) return ${'state99_argument'}->getErrorMessage();
if(${'state99_argument'} !== null) ${'state99_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars100_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars100_argument'}->isValid()) return ${'extra_vars100_argument'}->getErrorMessage();
} else
${'extra_vars100_argument'} = NULL;if(${'extra_vars100_argument'} !== null) ${'extra_vars100_argument'}->setColumnType('text');

${'regdate101_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate101_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate101_argument'}->isValid()) return ${'regdate101_argument'}->getErrorMessage();
if(${'regdate101_argument'} !== null) ${'regdate101_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`transaction_srl`', ${'transaction_srl83_argument'})
,new InsertExpression('`epay_module_srl`', ${'epay_module_srl84_argument'})
,new InsertExpression('`module_srl`', ${'module_srl85_argument'})
,new InsertExpression('`plugin_srl`', ${'plugin_srl86_argument'})
,new InsertExpression('`target_module`', ${'target_module87_argument'})
,new InsertExpression('`order_srl`', ${'order_srl88_argument'})
,new InsertExpression('`order_title`', ${'order_title89_argument'})
,new InsertExpression('`payment_method`', ${'payment_method90_argument'})
,new InsertExpression('`payment_amount`', ${'payment_amount91_argument'})
,new InsertExpression('`p_member_srl`', ${'p_member_srl92_argument'})
,new InsertExpression('`p_user_id`', ${'p_user_id93_argument'})
,new InsertExpression('`p_name`', ${'p_name94_argument'})
,new InsertExpression('`p_email_address`', ${'p_email_address95_argument'})
,new InsertExpression('`result_code`', ${'result_code96_argument'})
,new InsertExpression('`result_message`', ${'result_message97_argument'})
,new InsertExpression('`pg_tid`', ${'pg_tid98_argument'})
,new InsertExpression('`state`', ${'state99_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars100_argument'})
,new InsertExpression('`regdate`', ${'regdate101_argument'})
));
$query->setTables(array(
new Table('`hme_epay_transactions`', '`epay_transactions`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>