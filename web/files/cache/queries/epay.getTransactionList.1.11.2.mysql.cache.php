<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTransactionList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->transaction_srl)) {
${'transaction_srl3_argument'} = new ConditionArgument('transaction_srl', $args->transaction_srl, 'equal');
${'transaction_srl3_argument'}->createConditionValue();
if(!${'transaction_srl3_argument'}->isValid()) return ${'transaction_srl3_argument'}->getErrorMessage();
} else
${'transaction_srl3_argument'} = NULL;if(${'transaction_srl3_argument'} !== null) ${'transaction_srl3_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id4_argument'} = new ConditionArgument('user_id', $args->user_id, 'like');
${'user_id4_argument'}->createConditionValue();
if(!${'user_id4_argument'}->isValid()) return ${'user_id4_argument'}->getErrorMessage();
} else
${'user_id4_argument'} = NULL;if(${'user_id4_argument'} !== null) ${'user_id4_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address5_argument'} = new ConditionArgument('email_address', $args->email_address, 'like');
${'email_address5_argument'}->createConditionValue();
if(!${'email_address5_argument'}->isValid()) return ${'email_address5_argument'}->getErrorMessage();
} else
${'email_address5_argument'} = NULL;if(${'email_address5_argument'} !== null) ${'email_address5_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name6_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'like');
${'nick_name6_argument'}->createConditionValue();
if(!${'nick_name6_argument'}->isValid()) return ${'nick_name6_argument'}->getErrorMessage();
} else
${'nick_name6_argument'} = NULL;if(${'nick_name6_argument'} !== null) ${'nick_name6_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name7_argument'} = new ConditionArgument('user_name', $args->user_name, 'like');
${'user_name7_argument'}->createConditionValue();
if(!${'user_name7_argument'}->isValid()) return ${'user_name7_argument'}->getErrorMessage();
} else
${'user_name7_argument'} = NULL;if(${'user_name7_argument'} !== null) ${'user_name7_argument'}->setColumnType('varchar');

${'page9_argument'} = new Argument('page', $args->{'page'});
${'page9_argument'}->ensureDefaultValue('1');
if(!${'page9_argument'}->isValid()) return ${'page9_argument'}->getErrorMessage();

${'page_count10_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count10_argument'}->ensureDefaultValue('10');
if(!${'page_count10_argument'}->isValid()) return ${'page_count10_argument'}->getErrorMessage();

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('tran.transaction_srl');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`tran`.`transaction_srl`', '`transaction_srl`')
,new SelectExpression('`tran`.`epay_module_srl`', '`epay_module_srl`')
,new SelectExpression('`tran`.`module_srl`', '`module_srl`')
,new SelectExpression('`tran`.`target_module`', '`target_module`')
,new SelectExpression('`tran`.`order_srl`', '`order_srl`')
,new SelectExpression('`tran`.`order_title`', '`order_title`')
,new SelectExpression('`tran`.`payment_method`', '`payment_method`')
,new SelectExpression('`tran`.`payment_amount`', '`payment_amount`')
,new SelectExpression('`tran`.`p_member_srl`', '`p_member_srl`')
,new SelectExpression('`tran`.`p_user_id`', '`p_user_id`')
,new SelectExpression('`tran`.`p_name`', '`p_name`')
,new SelectExpression('`tran`.`p_email_address`', '`p_email_address`')
,new SelectExpression('`tran`.`result_code`', '`result_code`')
,new SelectExpression('`tran`.`result_message`', '`result_message`')
,new SelectExpression('`tran`.`state`', '`state`')
,new SelectExpression('`tran`.`extra_vars`', '`extra_vars`')
,new SelectExpression('`tran`.`regdate`', '`regdate`')
,new SelectExpression('`module`.`mid`', '`mid`')
,new SelectExpression('`module`.`browser_title`', '`browser_title`')
,new SelectExpression('`plugin`.`plugin_srl`', '`plugin_srl`')
,new SelectExpression('`plugin`.`plugin`', '`plugin_name`')
,new SelectExpression('`plugin`.`title`', '`plugin_title`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
));
$query->setTables(array(
new Table('`hme_epay_transactions`', '`tran`')
,new JoinTable('`hme_modules`', '`module`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`.`module_srl`','`tran`.`module_srl`',"equal")))
))
,new JoinTable('`hme_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`tran`.`p_member_srl`',"equal")))
))
,new JoinTable('`hme_epay_plugins`', '`plugin`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`plugin`.`plugin_srl`','`tran`.`plugin_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`tran`.`transaction_srl`',$transaction_srl3_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`user_id`',$user_id4_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$email_address5_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$nick_name6_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_name`',$user_name7_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count11_argument'}, ${'page9_argument'}, ${'page_count10_argument'}));
return $query; ?>